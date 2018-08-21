<?php

namespace WellnessLiving\Wl\Report;
use WellnessLiving\WlAssertException;

/**
 * Packs variables in URL.
 *
 * The difference of this packing from {@link http_build_query()} is that this function considers that there may be
 * large arrays, and performs some compression.
 *
 * <h2>Measuring information volume</h2>
 *
 * Volume of information is measured in number of distinct values.
 *
 * For example, 8 distinct values correspond to 3 bits, whereas 12 distinct values is somewhere about 3.6 bits.
 *
 * This is the reason, why in the format below we do not specify number of bits.
 * Instead, when we want to specify size of a field, we specify number of distinct values.
 *
 * The reason to measure information volume this way is that we do not use individual bits to store individual
 *   fields. Instead, we constantly generate 62-base number by adding new information to it. This adds us even greater
 *   compression, because we use less bits to store information.
 *
 * It should be clear that a minimum volume of information that can be stored is two values.
 *   If there is only 1 distinct value, we do not need to store anything to know that value.
 *
 * To understand how this way of measuring information can be used to save some bits, let's look at an example.
 *
 * For example, we have two values, one has volume of 3 values (for example, 2) and another has volume of 5 values
 *   (for example, 1).
 *
 * If we store these two numbers in individual bit fields, we would need 5 bits: 2 bits to store the first value, and
 *   3 bits to store the second value.
 *
 * It is intuitively clear that we have some unused values in those bit fields: 11 is not used for the first value,
 *   and 101, 110 and 111 are not used for the second value.
 *
 * On the other hand, if we apply arithmetic encoding, we could save 1 bit of information. To learn how many bits we
 *   need to store our two values, we need to multiply volumes of information:
 *   3*5=15 different values
 *
 * It is enough just 4 bits to store 15 different values in range [0..14].
 *
 * To get the number to store there we just perform some simple calculation:
 * 2+1*3=5 (<tt>first_value+second_value*first_volume=result</tt>)
 *
 * Having information that the first value has volume of 3 values, and the second one has volume of 5 values, we can
 * decode it:
 *
 * 5%3=2 (<tt>result%first_volume=first_value</tt>)
 * 5 div 3=1 (<tt>result div first_volume=second_value</tt>; div is an integer division operator)
 *
 * <h2>Encoded URL-safe format</h2>
 *
 * The resulting string has an URL-safe format.
 *
 * It contains the following characters: [a-zA-Z0-9].
 *
 * Encoded query is base-62 encoded binary data.
 *
 * <h2>Raw binary data format</h2>
 *
 * Binary data contains the following fields:<ul>
 *
 * <li>Dictionary<br />
 *   An enumerated list of all names and values in the query array.
 * </li><li>Data<br />
 *   Structure of the query array.
 * </li></ul>
 *
 * These two structures are places right one after another. Their structure is explained later.
 *
 * <h2>Format of the dictionary</h2>
 *
 * All scalar values, and all keys in all associative arrays are stored in the dictionary.
 *
 * Dictionary is a sequence of the following values:
 *
 * <ol>
 *   <li><b>65536 values</b>, number of elements in the dictionary.<br />
 *     Value stored in this field is referenced as <tt>i_dictionary</tt> in the explanation of other fields.
 *   </li>
 *   <li>small numbers (in range [0..2147483647])</li>
 *   <li>dates</li>
 *   <li>large numbers ([10..20] digits - enough for numbers up to 64 bit length)</li>
 *   <li>simple strings</li>
 *   <li>complex strings</li>
 * </ol>
 *
 * Links to the dictionary are numbers that represent sequential position of a value in the dictionary across all
 *   values in all arrays of the dictionary.
 *
 * Important: some numbers may be excluded from dictionary (these are numbers that are only used to represent dates).
 *
 * For example, if we have 5 small numbers (from which 1 number is excluded), 2 dates, and 3 large numbers, we
 *   would have the following indexes in the dictionary<br />
 * 0 - 12<br />
 * 1 - 13<br />
 * 2 - 43456<br />
 * (excluded) - 43458<br />
 * 3 - 90000<br />
 * 4 - date for 43456 (stored as 2)<br />
 * 5 - date for 43458 (stored as 3)<br />
 * 6 - 1000000000<br />
 * 7 - 1000000001<br />
 * 8 - 200000000034234243
 *
 * <h2>How small numbers stored</h2>
 *
 * Small numbers are stored in an ordered array, smaller number are stored at the beginning of the array.
 *
 * Additionally, only differences between neighboring numbers are stored. Moreover, because we know that all numbers
 *   are unique, and the least possible difference is 1, factually stored differences are decreased by 1.
 *
 * The very first number is considered -1 - to allow get zero by adding the least difference of 1.
 * -1 is not actually stored, but is used to derive the very first number in the array of numbers.
 *
 * For example, we have the following set of numbers:<br />
 * 10, 90, 2, 0, 1, 100, 101, 1003, 1000
 *
 * First of all, this array is sorted:<br />
 * 0, 1, 2, 10, 90, 100, 101, 1000, 1003
 *
 * Next, differences are evaluated (considering -1 before the array begins):<br />
 * 1, 1, 1, 8, 80, 10, 1, 899, 3
 *
 * At the end, all differences are decreased by 1:<br />
 * 0, 0, 0, 7, 79, 9, 0, 898, 2
 *
 * This last array is the array that is actually stored in the binary data.
 *
 * Each number in the array may occupy different volume of information that depends on the size of the number.
 *
 * We hope that differences will not be very large in most cases, so we use less volume of information to store smaller
 *   numbers.
 *
 * A list of possible volumes, and format of the array of numbers follows:
 *
 * <ol>
 *   <li><b><tt>i_dictionary</tt>+1 values</b> - total number of small numbers</li>
 *   <li>An array of numbers. Each item of the array contains two elements:
 *     <ol>
 *       <li><b>5 values</b> - size of the number:<br />
 *         0 - number in range [0..9] (10 values, ~3 bits)<br />
 *         1 - number in range [10..99] (90 values, ~7 bits)<br />
 *         2 - number in range [100..9999] (9900 values, ~14 bits)<br />
 *         3 - number in range [10000..99999] (90000 values, ~17 bits)
 *         4 - number in range [100000..2147483647] (2147383648 values, ~31 bits)
 *       </li><li>
 *         <b>number of values specified in the previous field</b> - the difference, from which beginning of the range
 *         is subtracted.<br />
 *         For example, 898 is stored with type 2 (range [100..9999]) as 799, and occupies 9900 values of information.
 *       </li>
 *     </ol>
 *   </li>
 * </ol>
 *
 * <h2>How dates stored</h2>
 *
 * Dates are stored in random order. Each date is a link to its numerical representation in the set of small numbers.
 *
 * Allowed years are in range [1900..3000].
 *
 * Numeric representation is derived using the following formula:<br />
 * (year-1900)*384+(month-1)*32+day-1
 *
 * The reason to store dates as links to their numerical representation is that we hope that differences between
 *   individual dates are not very large, so we could gain additional compression by storing only difference between
 *   dates. Numbers are already compressed by storing only differences, so we just add numerical representation of dates
 *   to numbers to use that compression.
 *
 * Format of array of dates follows:
 *
 * <ol>
 *   <li><b><tt>i_dictionary</tt>+1 values</b> - total number of dates</li>
 *   <li>An array of dates. Each item of the array contains two elements:
 *     <ol>
 *       <li><b>2 values</b> - whether numerical representation is only used in the date and should be excluded from
 *         the dictionary<br />
 *         0 - if this number is only used for dates, and should be excluded from the dictionary<br />
 *         1 - if this number is also used as an individual value, and should occupy an individual index in the dictionary
 *       </li><li>
 *         <b><tt>i_dictionary</tt> values</b> - link to the array of small numbers, including all excluded numbers.<br />
 *         See an example in the explanation of format of dictionary for example of such links.
 *       </li>
 *     </ol>
 *   </li>
 * </ol>
 *
 * <h2>How large numbers are stored</h2>
 *
 * Large numbers are numbers [10..20] digits long, or in range [2147483648..99999999999999999999].
 *
 * Because our volume of information is derived based on number of different values, we can store numbers of arbitrary
 * size digit by digit in the decimal representation of the number. The only reason to restrict how long numbers can be
 * is that we need to store length of each individual number. Maximum value for large number is selected to fit 64-bit
 * values.
 *
 * Format of array of large numbers:
 *
 * <ol>
 *   <li><b><tt>i_dictionary</tt>+1 values</b> - total number of large numbers</li>
 *   <li>An array of large numbers. Each item of the array contains two elements:
 *     <ol>
 *       <li><b>11 values</b> - number of digits, minus 10. For example, 5 stored in this field corresponds to a number
 *         with 15 decimal digits.
 *       </li><li>
 *         An array of decimal digits of the number.
 *         Number of elements in this array is stored in the previous field.
 *         Each element of the array occupies volume of 10 values.
 *       </li>
 *     </ol>
 *   </li>
 * </ol>
 *
 * <h2>How strings are stored</h2>
 *
 * There are two types of strings: complex and simple.
 *
 * The difference between these strings are length and a set of characters in the string.
 *
 * Simple strings are strings of length less then 32, and with characters listed in
 * <tt>RsReportUrlEncode::STRING_SIMPLE</tt> constant.
 *
 * This constant is selected to cover all possible variable names, SIDs and sorting orders that is used in table
 * reports.
 *
 * Empty string is stored as a simple string.
 *
 * Complex strings are all other strings. The complex strings have a limit - maximum length is 255 characters.
 *
 * We hope that all strings should be simple, complex strings are added just for universality.
 *
 * Complex and simple strings are stored as two separate arrays in the dictionary, but have very similar formats.
 *
 * Format of simple strings:
 *
 * <ol>
 *   <li><b><tt>i_dictionary</tt>+1 values</b> - total number of simple strings in the array</li>
 *   <li>An array of strings. Each item of the array contains two elements:
 *     <ol>
 *       <li><b>32 values</b> - length of the string.
 *       </li><li>
 *         An array of characters.
 *         Each characters is stored as an index in the <tt>RsReportUrlEncode::STRING_SIMPLE</tt> constant, and occupies
 *         volume of information that equals number of characters in this constant (currently, this is 30 values).
 *       </li>
 *     </ol>
 *   </li>
 * </ol>
 *
 * Format of complex strings:
 *
 * <ol>
 *   <li><b><tt>i_dictionary</tt>+1 values</b> - total number of complex strings in the array</li>
 *   <li>An array of strings. Each item of the array contains two elements:
 *     <ol>
 *       <li><b>255 values</b> - length of the string, minus 1 (because zero-length string is stored as a simple string).
 *       </li><li>
 *         An array of characters.
 *         Each characters is stored as its {@link ord()} value, and occupies 256 values.
 *       </li>
 *     </ol>
 *   </li>
 * </ol>
 *
 * <h2>Format of the data</h2>
 *
 * Data is a recursive structure in nature.
 *
 * The outermost element of the data is always an array.
 *
 * An array has the following format:
 *
 * <ol>
 *   <li>
 *     <b>2 values</b> - type of the length:<br />
 *     0 - [0..31] elements<br />
 *     1 - [32..1023] elements
 *   </li><li>
 *     <b>32 or 992 values</b> - length of the array<br />
 *   </li><li><b>2 values</b> - type of the array:<br />
 *     0 - the array is indexed<br />
 *     1 - the array is associative<br />
 *     This field is not stored for empty arrays.
 *   </li><li>
 *     <b>3 values</b> - type of the array:<br />
 *     0 - array has child arrays, and also scalar values.<br />
 *     1 - all values of the array are scalars.<br />
 *     2 - all values of the array are arrays.<br />
 *     This field is not stored for empty arrays.
 *   </li><li>
 *     Array of values. Each item of the array contains one, two or three elements:<ol>
 *       <li>
 *         <b><tt>i_dictionary</tt> values</b> - key. Stored as a link to a dictionary.<br />
 *         This element is only stored for associative arrays.
 *       </li><li>
 *         <b>2 values</b> - type of the element:<br />
 *         0 - this is a child array<br />
 *         1 - this is a scalar value<br />
 *         This element is only stored for arrays that have mixed values (for arrays of type #0).
 *       </li><li>
 *         The value. Value is one of two:<ul>
 *           <li>
 *             An array. Arrays are stored recursively.
 *           </li><li>
 *             <b><tt>i_dictionary</tt> values</b> - a scalar value. Stored as a link to a dictionary.
 *           </li>
 *         </ul>
 *       </li>
 *     </ol>
 *   </li>
 * </ol>
 *
 * @link http://en.wikipedia.org/wiki/Arithmetic_encoding
 * @see RsReportUrlDecode
 */
class UrlEncode
{
  /**
   * Alphabet for the resulting URL-safe string.
   *
   * @var string
   */
  const STRING_RESULT = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

  /**
   * Predefined alphabet for simple strings (this alphabet covers SIDs, variable names and sorting orders in table
   *   reports).
   *
   * @var string
   */
  const STRING_SIMPLE = 'abcdefghijklmnopqrstuvwxyz_+-,';

  /**
   * A list of all values in all variables of the query.
   *
   * Key - is the value, value is true before the dictionary is stored, or index in the dictionary when the dictionary
   *   is completely built.
   *
   * @var array
   */
  private $a_dictionary = [];

  /**
   * Value of resulting binary data.
   *
   * @var string
   */
  private $i_value = '';

  /**
   * Volume of resulting binary data.
   *
   * @var string
   */
  private $i_volume = '1';

  /**
   * Adds binary information to binary storage.
   *
   * @param int $i_volume Volume of information to store (number of different values for <tt>$i_value</tt>).
   *   Pass 0 to flush the last modulus into binary data.
   * @param int $i_value the value to store.
   *   This value should be in range [0..<tt>$i_volume</tt>-1].
   * @throws WlAssertException In a case of an error with source data (<tt>i_value</tt> is out of range).
   */
  protected function _binary_add($i_volume,$i_value):void
  {
    WlAssertException::assertTrue(!$i_volume||$i_value<$i_volume,[
      'i_value' => $i_value,
      'i_volume' => $i_volume,
      'text_message' => 'Value is larger than allowed number of different values.'
    ]);
    WlAssertException::assertTrue($i_volume>=0&&$i_volume<=2147483647,[
      'i_value' => $i_value,
      'i_volume' => $i_volume,
      'text_message' => 'Volume is too large.'
    ]);
    WlAssertException::assertTrue($i_value>=0&&$i_value<2147483647,[
      'i_value' => $i_value,
      'i_volume' => $i_volume,
      'text_message' => 'Value is too large.'
    ]);

    $this->i_value = bcadd($this->i_value,bcmul($this->i_volume,$i_value,0),0);
    $this->i_volume = bcmul($this->i_volume,$i_volume,0);
  }

  /**
   * Encodes binary data.
   *
   * @return string Encoded base-62 data.
   */
  protected function _binary_encode()
  {
    $s_char = UrlEncode::STRING_RESULT;
    $i_mod = strlen($s_char);

    $i_value = $this->i_value;
    $s_binary = '';
    while($i_value>0)
    {
      $i = bcmod($i_value,$i_mod);
      $s_binary .= $s_char[$i];
      $i_value = bcdiv($i_value,$i_mod,0);
    }
    return $s_binary;
  }

  /**
   * Adds a value to a dictionary.
   *
   * @param string $s_value A value to add.
   */
  protected function _dictionary_add(string $s_value):void
  {
    if(!isset($this->a_dictionary[$s_value]))
      $this->a_dictionary[$s_value] = true;
  }

  /**
   * Encodes dictionary.
   *
   * @throws WlAssertException In a case of an assertion.
   */
  protected function _dictionary_encode():void
  {
    $i_dictionary = count($this->a_dictionary);
    WlAssertException::assertTrue($i_dictionary<=65535,[
      'i_dictionary' => $i_dictionary,
      'text_message' => 'Dictionary is too long.'
    ]);

    // Store size of the dictionary
    $this->_binary_add('65536',$i_dictionary);

    // Separate different types of dictionary items

    // number => boolean
    // numbers up to 9 digits are stored here.
    // numerical representation of dates are stored here also
    // values is true, if this number is used as a number, and should occupy an individual index in the dictionary
    $a_number = [];

    $a_number_large = []; // number is value. number larger then 9 decimal digits (up to 20 digits) are store here
    $a_string_complex = []; // a string as a value
    $a_string_simple = []; // a string as a value
    $a_date = []; // date => numerical representation of the date (a link to $a_number)
    foreach($this->a_dictionary as $s_value => $v)
    {
      if(preg_match('~^[0-9]{1,10}$~',$s_value)&&$s_value<=2147483647)
      {
        $a_number[$s_value] = true;
        continue;
      }

      if(preg_match('~^[0-9]{10,20}$~',$s_value))
      {
        $a_number_large[] = (string)$s_value;
        continue;
      }

      if(preg_match('~^([0-9]{4})-([0-9]{2})-([0-9]{2})$~',$s_value,$a_match)&&$a_match[1]>=1900&&$a_match[1]<3000&&$a_match[2]>0&&$a_match[2]<=12&&$a_match[3]>0&&$a_match[3]<=31)
      {
        $i_number = ($a_match[1]-1900)*384+($a_match[2]-1)*32+$a_match[3]-1;
        $a_date[$s_value] = $i_number;
        if(!isset($a_number[$i_number]))
          $a_number[$i_number] = false;
        continue;
      }

      // Empty string is a simple string
      if(preg_match('~^[a-z_+\\-,]{0,31}$~',$s_value))
      {
        $a_string_simple[] = $s_value;
        continue;
      }

      if(strlen($s_value)<256)
      {
        $a_string_complex[] = $s_value;
        continue;
      }

      WlAssertException::fail([
        's_value' => $s_value,
        'text_message' => 'Dictionary has a value that is too long.'
      ]);
    }

    // Indexes in the dictionary are evaluated during encoding of the dictionary
    $i_index = 0;

    // Store numbers
    // $i_dictionary+1, because total number of different values for count($a_number) is by 1 larger then the largest
    //   index in the dictionary (it can equal $i_dictionary, if all the values are numbers).
    $this->_binary_add($i_dictionary+1,count($a_number));

    ksort($a_number);
    $i_last = -1; // -1 to allow store 0 as the first value, and to not to require zero differences.

    $i_number_index = 0; // separate enumeration to exclude numbers that are used only in dates from the dictionary
    $a_number_index = [];
    foreach($a_number as $i_number => $v)
    {
      if($v)
      {
        $this->a_dictionary[$i_number] = $i_index;
        $i_index++;
      }
      $a_number_index[$i_number] = $i_number_index;
      $i_number_index++;

      $i_difference = $i_number-$i_last-1; // -1, because zero difference is not allowed.
      $i_last = $i_number;

      if($i_difference<10)
      {
        $this->_binary_add(5,0);
        $this->_binary_add(10,$i_difference);
      }
      elseif($i_difference<100)
      {
        $this->_binary_add(5,1);
        $this->_binary_add(90,$i_difference-10);
      }
      elseif($i_difference<10000)
      {
        $this->_binary_add(5,2);
        $this->_binary_add(9900,$i_difference-100);
      }
      elseif($i_difference<100000)
      {
        $this->_binary_add(5,3);
        $this->_binary_add(90000,$i_difference-10000);
      }
      else
      {
        // up to 2147483647
        $this->_binary_add(5,4);
        $this->_binary_add(2147383648,$i_difference-100000);
      }
    }

    // Store dates.
    $this->_binary_add($i_dictionary+1,count($a_date));
    foreach($a_date as $s_value => $i_number)
    {
      $this->a_dictionary[$s_value] = $i_index;
      $i_index++;

      // Store whether the number is only used in the date and should be excluded from the dictionary
      $this->_binary_add(2,$a_number[$i_number]?'1':'0');

      // Dates are links to their numerical representation in the sequence of all numbers.
      $this->_binary_add($i_dictionary,$a_number_index[$i_number]);
    }

    // Store large numbers
    $this->_binary_add($i_dictionary+1,count($a_number_large));
    foreach($a_number_large as $i_number)
    {
      $this->a_dictionary[$i_number] = $i_index;
      $i_index++;

      // 16 - total number of different lengths ([10..20] lengths are allowed)
      // -10 from the length - to store numbers in range [0..10]
      $this->_binary_add(11,strlen($i_number)-10);
      for($i = 0;$i<strlen($i_number);$i++)
        $this->_binary_add(10,$i_number[$i]);
    }

    // Store simple strings

    $a_character = []; // character -> index
    $s = UrlEncode::STRING_SIMPLE;
    for($i = 0;$i<strlen($s);$i++)
      $a_character[$s[$i]] = $i;
    $i_mod = count($a_character);

    $this->_binary_add($i_dictionary+1,count($a_string_simple));
    foreach($a_string_simple as $s_value)
    {
      $this->a_dictionary[$s_value] = $i_index;
      $i_index++;

      // 31 is maximum length, empty string is also stored as a simple string - 32 different values
      $this->_binary_add(32,strlen($s_value));

      for($i = 0;$i<strlen($s_value);$i++)
        $this->_binary_add($i_mod,$a_character[$s_value[$i]]);
    }

    // Store complex strings

    $this->_binary_add($i_dictionary+1,count($a_string_complex));
    foreach($a_string_complex as $s_value)
    {
      $this->a_dictionary[$s_value] = $i_index;
      $i_index++;

      // 255 is maximum length, and empty strings are stored as simple string - so we can subtract 1 from the length,
      //   and use less information (255 instead 256 different values)
      $this->_binary_add(255,strlen($s_value)-1);

      for($i = 0;$i<strlen($s_value);$i++)
        $this->_binary_add(256,ord($s_value[$i]));
    }
  }

  /**
   * Gathers a dictionary based on the query to encode.
   *
   * @param array $a_query Query to encode.
   * @throws WlAssertException In a case of an assertion.
   */
  protected function _dictionary_gather(array $a_query)
  {
    $is_index = true;
    for($i = 0;$i<count($a_query);$i++)
    {
      if(!isset($a_query[$i]))
      {
        $is_index = false;
        break;
      }
    }

    WlAssertException::assertTrue(count($a_query)<=1023,[
      'a_query' => $a_query,
      'text_message' => 'Array has too many elements.'
    ]);

    foreach($a_query as $s_key => $x_value)
    {
      if(!$is_index)
        $this->_dictionary_add($s_key);

      if(is_array($x_value))
        $this->_dictionary_gather($x_value);
      elseif(is_string($x_value)||is_numeric($x_value))
        $this->_dictionary_add($x_value);
      elseif($x_value===null)
        $this->_dictionary_add('');
      elseif($x_value===true||$x_value===false)
        $this->_dictionary_add($x_value?'1':'0');
      else
      {
        WlAssertException::fail([
          'a_query' => $a_query,
          's_key' => $s_key,
          'text_message' => 'Unknown type of value. Value should be scalar.',
          'x_value' => $x_value
        ]);
      }
    }
  }

  /**
   * Encodes values.
   *
   * @param array $a_value Values to encode.
   * @throws WlAssertException In a case of an assertion.
   */
  protected function _value(array $a_value)
  {
    $is_index = true; // whether array is indexed
    $has_scalar = false; // whether array has values
    $has_array = false; // whether array has arrays
    for($i = 0;$i<count($a_value);$i++)
    {
      if(!isset($a_value[$i]))
      {
        $is_index = false;
        break;
      }
    }

    foreach($a_value as $x_value)
    {
      if(is_array($x_value))
        $has_array = true;
      else
        $has_scalar = true;
      if($has_array&&$has_scalar)
        break;
    }

    if(count($a_value)<=31)
    {
      $this->_binary_add(2,0); // type of the length: 0 => up to 31
      $this->_binary_add(32,count($a_value));
    }
    else
    {
      $this->_binary_add(2,1); // type of the length: 1 => 32..1023

      // 992 = 1024-32
      $this->_binary_add(992,count($a_value)-32);
    }

    if(!count($a_value))
      return;

    $this->_binary_add(2,$is_index?0:1); // type of the array

    // Type of array values
    if($has_scalar&&$has_array)
      $this->_binary_add(3,0); // 0 - mixed
    elseif($has_scalar)
      $this->_binary_add(3,1); // 1 - scalar values only
    elseif($has_array)
      $this->_binary_add(3,2); // 2 - arrays only
    // else array is empty, so we do not need to specify type of values

    $i_dictionary = count($this->a_dictionary);

    foreach($a_value as $s_key => $x_value)
    {
      if(!$is_index)
        $this->_binary_add($i_dictionary,$this->a_dictionary[$s_key]);

      if(is_array($x_value))
      {
        if($has_scalar)
          $this->_binary_add(2,0); // type of the value. 0 => array
        $this->_value($x_value);
      }
      else
      {
        if($has_array)
          $this->_binary_add(2,1); // type of the value. 1 => link to a dictionary
        $this->_binary_add($i_dictionary,$this->a_dictionary[$x_value]);
      }
    }
  }

  /**
   * Encodes a query array.
   *
   * @param array $a_query An array to encode
   * @return string Encoded data
   * @throws WlAssertException In a case of an assertion.
   */
  public static function encode(array $a_query)
  {
    $o = new UrlEncode();

    $o->_dictionary_gather($a_query);
    $o->_dictionary_encode();
    $o->_value($a_query);

    return $o->_binary_encode();
  }
}

?>