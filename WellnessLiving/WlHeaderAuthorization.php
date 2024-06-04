<?php

namespace WellnessLiving;

use WellnessLiving\Config\WlConfigAbstract;

/**
 * Represents the 'Authorization' header fields from an HTTP request.
 */
class WlHeaderAuthorization
{
  /**
   * Standard authorization header prefix for requests from our PHP SDK.
   *
   * @link namespace.Core/Request/Api/doc/authorization-header.md
   */
  const VERSION_20150518='20150518';

  /**
   * Authorization header prefix for requests from JS SDK when session ID is stored in the local storage.
   *
   * @link namespace.Core/Request/Api/doc/authorization-header.md
   */
  const VERSION_20210304_CORS='20210304-cors';

  /**
   * Debug information fields.
   *
   * `null` if there is no debug information or the header is not
   * in the correct format ({@link WlHeaderAuthorization::$is_valid}=`false`).
   *
   * The array key is field number. Field numbering starts from 2.
   * The value is field value.
   *
   * @var string[]|null
   */
  public $a_debug = null;

  /**
   * List of found errors in header format.
   *
   * @var string[]
   */
  public $a_diagnostic = [];

  /**
   * List of headers that were used in computing the signature.
   * Each element is the name of the header.
   *
   * `null` if there is no value (in case of data format violation).
   *
   * @var string[]|null
   */
  public $a_header_sign = null;

  /**
   * Whether the header is in the correct format.
   *
   * @var bool
   */
  public $is_valid=false;

  /**
   * Application ID.
   *
   * The value must match the value of the {@link WlConfigAbstract::AUTHORIZE_ID} constant.
   *
   * `null` if the header is not in the correct format ({@link WlHeaderAuthorization::$is_valid}=`false`).
   *
   * @var string|null
   */
  public $s_application_id = null;

  /**
   * Debug information format version.
   *
   * `null` if there is no debug information or the header is not
   * in the correct format ({@link WlHeaderAuthorization::$is_valid}=`false`).
   *
   * @var string|null
   */
  public $s_debug_version = null;

  /**
   * The signature hash.
   *
   * `null` if the header is not in the correct format ({@link WlHeaderAuthorization::$is_valid}=`false`).
   *
   * @var string|null
   */
  public $s_signature = null;

  /**
   * Source string with 'Authorization' header value.
   *
   * @var string
   */
  public $s_source;

  /**
   * Format version for 'Authorization' header.
   * One of {@link WlHeaderAuthorization}::`VERSION_*` constants.
   *
   * `null` if the header is not in the correct format ({@link WlHeaderAuthorization::$is_valid}=`false`).
   *
   * @var ?string
   */
  public $s_version;

  /**
   * Retrieves all 'Authorization' headers from the current request.
   *
   * @return WlHeaderAuthorization[] All 'Authorization' headers from the current request.
   * If the array is empty, then there are no 'Authorization' headers in the request.
   */
  public static function createFromRequest()
  {
    $a_header = WlTool::getAllHeaders();
    // When several HTTP headers arrive, on the PHP side they are combined into one, separated by comma+space.
    $a_auth = explode(', ',isset($a_header['Authorization'])?$a_header['Authorization']:'');

    $a_result = [];
    foreach($a_auth as $s_auth)
      $a_result[] = WlHeaderAuthorization::createParse($s_auth);

    return $a_result;
  }

  /**
   * Create 'Authorization' header object from string.
   *
   * @param string $s_auth The value of 'Authorization' header.
   * @return WlHeaderAuthorization The 'Authorization' header object.
   */
  public static function createParse($s_auth)
  {
    $o_result = new WlHeaderAuthorization();
    $o_result->s_source = $s_auth;

    $a_auth = explode(',',$s_auth,5);
    if(count($a_auth)!=4)
      $o_result->a_diagnostic[] = 'The number of header elements is not as expected (4 expected, '.count($a_auth).' present.).';

    if(!in_array($a_auth[0],[self::VERSION_20150518,self::VERSION_20210304_CORS]))
      $o_result->a_diagnostic[] = 'Error in specifying header version: '.$a_auth[0];

    $s_version = $a_auth[0];

    if(!isset($a_auth[1]))
    {
      $o_result->a_diagnostic[] = 'Application ID is missing.';
      return $o_result;
    }

    $s_application_id = $a_auth[1];

    $a_header_sign = [];
    if(isset($a_auth[2]) && $a_auth[2]!=='')
      $a_header_sign = explode(';',$a_auth[2]);

    if(!isset($a_auth[3]))
    {
      $o_result->a_diagnostic[] = 'Signature is not specified.';
      return $o_result;
    }

    $a_signature = explode('.',$a_auth[3]);
    if(strlen($a_signature[0])!=64)
      $o_result->a_diagnostic[] = 'Signature SHA256 hash length is not 64 characters: '.$a_signature[0];

    $s_signature = $a_signature[0];

    // A signature can consist of several fields that are separated by a dot.
    // The first field is always the SHA256 hash of the signature.
    // Blocks of debugging information may be included in the signature.
    // If debug information is present, then the second field is the format version of the debug information block,
    // which can be from 1 to 3.
    // Depending on the version of the debugging information block, the number of signature fields may vary.
    $i_sign_count = count($a_signature);
    $s_debug_version = null;
    $a_debug = null;
    if($i_sign_count>1)
    {
      $a_debug_field_count = [
        '1' => 5,
        '2' => 8,
        '3' => 4
      ];
      $s_debug_version = $a_signature[1];
      if(!array_key_exists($s_debug_version,$a_debug_field_count))
      {
        $o_result->a_diagnostic[] = 'There was an error in specifying the version of the signature debugging information block.: '.$s_debug_version;
        return $o_result;
      }

      if($i_sign_count!=$a_debug_field_count[$s_debug_version])
      {
        $o_result->a_diagnostic[] = 'The number of signature fields is out of range: '.$i_sign_count;
        return $o_result;
      }

      $a_debug = array_slice($a_signature,2,null,true);
    }

    if($o_result->a_diagnostic)
      return $o_result;

    $o_result->a_debug = $a_debug;
    $o_result->a_header_sign = $a_header_sign;
    $o_result->is_valid = true;
    $o_result->s_application_id = $s_application_id;
    $o_result->s_debug_version = $s_debug_version;
    $o_result->s_signature = $s_signature;
    $o_result->s_version = $s_version;

    return $o_result;
  }
}

?>