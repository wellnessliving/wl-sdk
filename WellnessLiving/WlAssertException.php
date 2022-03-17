<?php

namespace WellnessLiving;

/**
 * This exception is thrown in a case of a programmatic client-side error.
 *
 * These errors require programmer attention, and should be fixed by programmer at client side.
 *
 * Example error: invalid SDK configuration setting (for example, URL of the server is not set at all), or PHPDoc for a
 * field of a model contains incorrect data.
 */
class WlAssertException extends \Exception
{
  /**
   * Arbitrary data that allows to understand root of the error.
   *
   * @var array
   */
  private $a_data;

  /**
   * Constructs a new assertion exception.
   *
   * @param array $a_data Data to write to exception object in a case of failure.
   * @param \Exception $e_previous The previous exception used for the exception chaining.
   */
  public function __construct(array $a_data,$e_previous=null)
  {
    $this->a_data=$a_data;

    parent::__construct(
      isset($a_data['text_message'])?$a_data['text_message']:'Assertion without message is thrown.',
      isset($a_data['i_code'])?$a_data['i_code']:0,
      $e_previous
    );
  }

  /**
   * Asserts that given value is not empty (zero, empty string, <tt>null</tt>, <tt>false</tt>, empty array).
   * See {@link empty()} for details.
   *
   * @param mixed $x_value Value to check.
   * @param array $a_data Data to write to exception object in a case of failure.
   * @throws WlAssertException In a case given value is empty.
   */
  public static function assertNotEmpty($x_value,array $a_data)
  {
    if(!$x_value)
      throw new WlAssertException($a_data);
  }

  /**
   * Asserts that given value is <tt>true</tt>.
   *
   * @param mixed $is_value Value to check.
   * @param array $a_data Data to write to exception object in a case of failure.
   * @throws WlAssertException In a case given value is not <tt>true</tt>.
   */
  public static function assertTrue($is_value,array $a_data)
  {
    if($is_value!==true)
      throw new WlAssertException($a_data);
  }

  /**
   * Throws an assertion exception.
   *
   * @param array $a_data Data to write to exception object.
   * @throws WlAssertException Always.
   */
  public static function fail(array $a_data)
  {
    throw new WlAssertException($a_data);
  }
}

?>