<?php

namespace WellnessLiving;

use WellnessLiving\Config\WlConfigAbstract;

/**
 * A class with helper functions for working with webhooks.
 */
class WlWebhook
{
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
   */
  public $a_diagnostic = null;

  /**
   * Request variable values.
   * Key is the variable name, value is the variable value.
   *
   * Cache for the {@link WlWebhook::variable()} method.
   *
   * `null` if the {@link WlWebhook::variable()} method was not called.
   * The empty array if no request variables were passed or a data format error.
   *
   * @var array|null
   */
  private $a_variable = null;

  /**
   * Whether the request is authorized or not.
   *
   * The cache of {@link WlWebhook::isAuthorize()} method.
   *
   * `true` if the request is authorized. `false` if the request is signed incorrectly.
   * `null` if the {@link WlWebhook::isAuthorize()} method has not been called yet.
   *
   * @var bool|null
   */
  private $is_authorize = null;

  /**
   * SDK configuration object.
   *
   * @var WlConfigAbstract
   */
  private $o_config;

  /**
   * Constructs a new webhook helper object.
   *
   * @param WlConfigAbstract $o_config WellnessLiving SDK configuration object.
   */
  public function __construct($o_config)
  {
    $this->o_config = $o_config;
  }

  /**
   * Checks whether the request is authorized or not.
   *
   * @return bool `true` if the request is authorized. `false` if the request is signed incorrectly.
   */
  public function isAuthorize()
  {
    if($this->is_authorize!==null)
      return $this->is_authorize;

    $this->is_authorize = false;

    $a_header = WlTool::getAllHeaders();
    if(!array_key_exists('Date',$a_header))
    {
      $this->a_diagnostic = [
        'a_header' => $a_header,
        'text_message' => '`Date` header is missing.'
      ];

      return false;
    }

    if(!array_key_exists('Content-Type',$a_header))
    {
      $this->a_diagnostic = [
        'a_header' => $a_header,
        'text_message' => '`Content-Type` header is missing.'
      ];

      return false;
    }

    if($a_header['Content-Type']!=='application/json')
    {
      // In the code below we read the request body and parse it as json.
      // Parsing in other formats is not implemented.
      $this->a_diagnostic = [
        'a_header' => $a_header,
        'text_message' => "The content type of request is not 'application/json'."
      ];

      return false;
    }

    $a_variable = $this->variable();
    if(!$a_variable)
    {
      // If there is an error in obtaining variables in the {@link WlWebhook::variable()} method,
      // then do not overwrite the error information.
      if(!$this->a_diagnostic)
      {
        $this->a_diagnostic = [
          'a_header' => $a_header,
          'text_message' => 'No variables arrived in the HTTP request body.'
        ];
      }

      return false;
    }

    /** @var WlConfigAbstract $s_config_class */
    $s_config_class = get_class($this->o_config);
    $a_auth = WlHeaderAuthorization::createFromRequest();
    if(!$a_auth)
    {
      $this->a_diagnostic = [
        'a_header' => $a_header,
        'text_message' => "There are no 'Authorization' headers."
      ];

      return false;
    }

    $a_signature_hash_receive = [];
    $a_auth_valid = [];
    $a_diagnostic_header = [];
    foreach($a_auth as $o_header_auth)
    {
      if(!$o_header_auth->is_valid)
      {
        $a_diagnostic_header[] = [
          'o_header_auth' => $o_header_auth,
          'text_message' => "Invalid 'Authorization' header."
        ];

        continue;
      }

      if($o_header_auth->s_version!==WlHeaderAuthorization::VERSION_20150518)
      {
        $a_diagnostic_header[] = [
          'o_header_auth' => $o_header_auth,
          'o_header_auth::$s_version' => $o_header_auth->s_version,
          'text_message' => "This version of `Authorization` header is not supported."
        ];

        continue;
      }

      if($o_header_auth->s_application_id!==$s_config_class::AUTHORIZE_ID)
      {
        $a_diagnostic_header[] = [
          'o_header_auth' => $o_header_auth,
          'o_header_auth::$s_application_id' => $o_header_auth->s_application_id,
          's_config_class::AUTHORIZE_ID' => $s_config_class::AUTHORIZE_ID,
          'text_message' => "The Application ID is invalid."
        ];

        continue;
      }

      $a_signature_hash_receive[] = $o_header_auth->s_signature;
      $a_auth_valid[] = $o_header_auth;
    }

    if(!$a_signature_hash_receive)
    {
      $this->a_diagnostic = [
        'a_header' => $a_header,
        'a_diagnostic_header' => $a_diagnostic_header,
        'text_message' => 'There are no valid headers to verify the signature.'
      ];
      return false;
    }

    $a_signature_compute = $this->signatureCompute();
    if(in_array($a_signature_compute['s_signature'],$a_signature_hash_receive,true))
      $this->is_authorize = true;
    else
    {
      $this->a_diagnostic = [
        'a_diagnostic_header' => $a_diagnostic_header,
        'a_header_auth_valid' => $a_auth_valid,
        'a_signature_compute' => $a_signature_compute,
        'text_message' => 'Invalid authorization hash.'
      ];
    }

    return $this->is_authorize;
  }

  /**
   * Computes the signatures of the current request.
   *
   * @return string[] The signature of the current request:<dl>
   *   <dt>string <var>s_signature</var></dt><dd>The signature SHA256 hash.</dd>
   *   <dt>string <var>s_signature_check</var></dt><dd>Check characters of data that was used for signature.</dd>
   * </dl>
   * @throws WlAssertException
   */
  private function signatureCompute()
  {
    $s_resource = $_SERVER['REQUEST_URI'];
    if(strncmp($s_resource,'/',1)==0)
      $s_resource = substr($s_resource,1);

    /** @var WlConfigAbstract $s_config_class */
    $s_config_class = get_class($this->o_config);

    $a_header = WlTool::getAllHeaders();

    $a_signature = [
      'a_header' => [],
      'a_variable' => $this->variable(),
      'dt_time' => date_create($a_header['Date'])->format('Y-m-d H:i:s'),
      's_code' => $s_config_class::AUTHORIZE_CODE,
      's_cookie_persistent' => '',
      's_cookie_transient' => '',
      's_host' => $_SERVER['SERVER_NAME'],
      's_id' => $s_config_class::AUTHORIZE_ID,
      's_method' => 'POST',
      's_resource' => $s_resource,
    ];

    $s_signature_compute = WlModelRequest::signatureCompute($a_signature);
    $a_signature_compute = explode('.',$s_signature_compute);

    $a_result = [
      's_signature' => $a_signature_compute[0]
    ];

    $i_signature_compute = count($a_signature_compute);
    if($i_signature_compute>1)
    {
      if($a_signature_compute[1]==='1' && $i_signature_compute>2)
        $a_result['s_signature_check'] = $a_signature_compute[2];
      else
        $a_result['s_signature_debug'] = implode('.',array_slice($a_signature_compute,1));
    }

    return $a_result;
  }

  /**
   * Gets the request variable values.
   *
   * Request variables are passed in the body of the POST request in JSON format.
   * To verify the signature, variables are already extracted from the body of the POST request.
   * Using this method allows to avoid repeated steps to parse the POST request body.
   *
   * The method can only be called after the request is authorized (the {@link WlWebhook::isAuthorize()} method).
   *
   * @return array|false Request variable values.
   *   The empty array if no request variables were passed or a data format error.
   *   The array key is field value. The value is the field value.
   */
  public function variable()
  {
    if($this->a_variable!==null)
      return $this->a_variable;

    if($this->is_authorize===null)
      trigger_error('Method WlWebhook::isAuthorize() must be called first.',E_USER_ERROR);

    // Variables come in the body of the POST request in the form of a json object.
    $s_data_post = ($this->o_config)::postRawData();
    if(!$s_data_post)
    {
      $this->a_diagnostic = [
        'text_message' => 'Request body us empty.'
      ];
      $this->a_variable = [];

      return [];
    }

    $a_variable = @json_decode($s_data_post,true);
    if(!is_array($a_variable))
    {
      $this->a_diagnostic = [
        's_data_post' => $s_data_post,
        'text_message' => 'Error in request variable format.',
      ];
      $this->a_variable = [];

      return [];
    }

    $this->a_variable = $a_variable;
    return $this->a_variable;
  }
}

?>