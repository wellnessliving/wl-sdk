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
   * Information about an authentication error, if found.
   *
   * This array is designed for logging purposes only.
   *
   * Known elements:
   * * `text_message` - text of the error message which may contain secret information which may not be presented
   *   to the end users for security reasons.
   * * Other elements - additional debugging information which is only designed for logging purposes,
   *   may contain secret information, may not be presented to the end users, keys and values may change
   *   without preliminary notice, and thus may not be used by your code.
   *
   * `null` if there are no authentication errors found.
   *
   * @var array|null
   * @see WlHeaderAuthorization::$is_valid
   */
  public $a_diagnostic = null;

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
   * `true` if authorization header has a valid format.
   *
   * `false` if there are errors encountered in the format of the authorization header.
   * In this case {@link WlHeaderAuthorization::$a_diagnostic} will contain the diagnostic information
   * about the found error.
   *
   * Also, `false` is set if authorization header was not parsed.
   * It is parsed by {@link WlHeaderAuthorization::createParse()}.
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
   * The build number in whose code the signature was generated.
   * For debug purposes only.
   *
   * The part of the source debug string in {@link WlHeaderAuthorization::$s_debug}.
   *
   * `null` if not specified or could not be parsed.
   *
   * @var string|null
   */
  public $s_build = null;

  /**
   * The signature debugging hash.
   * For debug purposes only.
   *
   * The part of the source debug string in {@link WlHeaderAuthorization::$s_debug}.
   *
   * `null` if not specified or could not be parsed.
   *
   * @var string|null
   */
  public $s_check = null;

  /**
   * The source debug string, excluding the signature hash.
   * For debug purposes only.
   *
   * `null` if not specified.
   *
   * @var string|null
   * @see WlHeaderAuthorization::$s_build
   * @see WlHeaderAuthorization::$s_check
   */
  public $s_debug = null;

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
   * An empty array if there are no `Authorization` headers arrived in this request.
   */
  public static function createFromRequest()
  {
    $a_header = WlTool::getAllHeaders();
    // When several HTTP headers arrive, on the PHP side they are combined into one, separated by comma+space.
    $a_auth = !empty($a_header['Authorization']) ? explode(', ',$a_header['Authorization']) : [];

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
    {
      $o_result->a_diagnostic = [
        'a_auth' => $a_auth,
        'i_count' => count($a_auth),
        'text_message' => 'The number of header elements is not expected (4 expected).'
      ];

      return $o_result;
    }

    $a_version_valid = [self::VERSION_20150518,self::VERSION_20210304_CORS];
    $s_version = $a_auth[0];
    if(!in_array($s_version,$a_version_valid))
    {
      $o_result->a_diagnostic = [
        'a_auth' => $a_auth,
        'a_version_valid' => $a_version_valid,
        's_version' => $s_version,
        'text_message' => 'Unknown header version.'
      ];

      return $o_result;
    }

    $o_result->s_version = $s_version;

    $s_application_id = $a_auth[1];
    if(trim($s_application_id)==='')
    {
      $o_result->a_diagnostic = [
        'a_auth' => $a_auth,
        'text_message' => 'Application ID is empty.'
      ];

      return $o_result;
    }

    $a_header_sign = [];
    if($a_auth[2]!=='')
      $a_header_sign = explode(';',$a_auth[2]);

    if(trim($a_auth[3])==='')
    {
      $o_result->a_diagnostic = [
        'a_auth' => $a_auth,
        'text_message' => 'Signature is not specified.'
      ];

      return $o_result;
    }

    $a_signature = explode('.',$a_auth[3]);
    $s_signature = $a_signature[0];
    if(strlen($s_signature)!=64)
    {
      $o_result->a_diagnostic = [
        'a_auth' => $a_auth,
        'a_signature' => $a_signature,
        's_signature' => $s_signature,
        'text_message' => 'Signature SHA256 hash length is not 64 characters.'
      ];

      return $o_result;
    }

    $i_sign_count = count($a_signature);
    if($i_sign_count>1)
    {
      $a_signature_debug = array_slice($a_signature,1);
      $o_result->s_debug = implode('.',$a_signature_debug);

      if($i_sign_count>2)
        $o_result->s_check = $a_signature[2];

      $s_version_debug = $a_signature[1];
      if($i_sign_count>3 && $s_version_debug==='3')
        $o_result->s_build = $a_signature[3];
    }

    $o_result->a_header_sign = $a_header_sign;
    $o_result->is_valid = true;
    $o_result->s_application_id = $s_application_id;
    $o_result->s_signature = $s_signature;
    $o_result->s_version = $s_version;

    return $o_result;
  }
}

?>