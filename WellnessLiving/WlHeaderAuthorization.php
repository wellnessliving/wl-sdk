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
   * List of headers that were used in computing the signature.
   * Each element is the name of the header.
   * The order of enumeration corresponds to the order of application when generating the signature.
   *
   * `null` if there is no value (in case of data format violation).
   *
   * @var string[]|null
   */
  public $a_header_sign = null;

  /**
   * Application ID.
   * Copy of {@link \WellnessLiving\Config\WlConfigAbstract::AUTHORIZE_ID}.
   *
   * `null` if there is no value (in case of data format violation).
   *
   * @var string|null
   */
  public $s_application_id = null;

  /**
   * Source string with debug information.
   * `null` if there is no debug information.
   *
   * @var string|null
   */
  public $s_debug = null;

  /**
   * Debug information format version.
   * `null` if there is no debug information.
   *
   * @var string|null
   */
  public $s_debug_version = null;

  /**
   * The signature hash.
   *
   * `null` if there is no value (in case of data format violation).
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
   * @var string
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

    $a_auth = explode(',',$s_auth,4);
    $o_result->s_version = $a_auth[0];
    if(!isset($a_auth[1]))
      return $o_result;

    $o_result->s_application_id = $a_auth[1];
    if(!isset($a_auth[2]))
      return $o_result;

    if($a_auth[2]==='')
      $o_result->a_header_sign = [];
    else
      $o_result->a_header_sign = explode(';',$a_auth[2]);

    if(!isset($a_auth[3]))
      return $o_result;

    $a_sign_debug = explode('.',$a_auth[3],3);
    $o_result->s_signature = $a_sign_debug[0];
    if(!isset($a_sign_debug[1]))
      return $o_result;

    $o_result->s_debug_version = $a_sign_debug[1];
    if(!isset($a_sign_debug[2]))
      return $o_result;

    $o_result->s_debug = $a_sign_debug[2];

    return $o_result;
  }
}

?>