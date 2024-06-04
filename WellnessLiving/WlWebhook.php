<?php

namespace WellnessLiving;

use WellnessLiving\Config\WlConfigAbstract;

/**
 * A class with helper functions for working with webhooks.
 */
class WlWebhook
{
  /**
   * List of found authentication errors.
   *
   * @var string[]
   */
  public $a_diagnostic = [];

  /**
   * Request variable values.
   * Key is the variable name, value is the variable value.
   *
   * Cache for the {@link WlWebhook::variable()} method.
   *
   * `null` if the {@link WlWebhook::variable()} method was not called.
   * The empty array if no request variables were passed or a data format error.
   *
   * @var array|null|false
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
      $this->a_diagnostic[] = "There are no 'Date' header:\n".var_export($a_header,true);
      return false;
    }

    if(!array_key_exists('Content-Type',$a_header))
    {
      $this->a_diagnostic[] = "There are no 'Content-Type' header:\n".var_export($a_header,true);
      return false;
    }

    if($a_header['Content-Type']!=='application/json')
    {
      $this->a_diagnostic[] = "The content type of POST request is not 'application/json':\n".
        var_export($a_header,true)
      ;
      return false;
    }

    if(!array_key_exists('User-Agent',$a_header) || $a_header['User-Agent']!=='WellnessLiving/WebhookAgent')
    {
      $this->a_diagnostic[] = "The 'User-Agent' header is invalid:\n".
        var_export($a_header,true)
      ;
      return false;
    }

    $a_variable = $this->variable();
    if(!$a_variable)
    {
      $this->a_diagnostic[] = 'There are no request variables.';
      return false;
    }

    /** @var WlConfigAbstract $s_config_class */
    $s_config_class = get_class($this->o_config);

    $a_auth = WlHeaderAuthorization::createFromRequest();
    if(!$a_auth)
    {
      $this->a_diagnostic[] = "There are no 'Authorization' headers.";
      return false;
    }

    $a_signature_hash_receive = [];
    $a_auth_valid = [];
    foreach($a_auth as $o_header_auth)
    {
      if(!$o_header_auth->is_valid)
      {
        $this->a_diagnostic[] = "Invalid 'Authorization' header: ".$o_header_auth->s_source."=>\n".
          var_export($o_header_auth->a_diagnostic,true)
        ;

        continue;
      }

      if($o_header_auth->s_version!==WlHeaderAuthorization::VERSION_20150518)
      {
        $this->a_diagnostic[] = "The 'Authorization' header version error (expected '".WlHeaderAuthorization::VERSION_20150518."'): ".$o_header_auth->s_version;
        continue;
      }

      if($o_header_auth->s_application_id!==$s_config_class::AUTHORIZE_ID)
      {
        $this->a_diagnostic[] = "The Application ID is incorrect (expected '".$s_config_class::AUTHORIZE_ID."'): ".$o_header_auth->s_application_id;
        continue;
      }

      $a_signature_hash_receive[] = $o_header_auth->s_signature;
      $a_auth_valid[] = $o_header_auth;
    }

    if(!$a_signature_hash_receive)
      return false;

    $a_signature_compute = $this->signatureCompute();
    if(in_array($a_signature_compute['s_signature'],$a_signature_hash_receive))
      $this->is_authorize = true;
    else
    {
      $this->a_diagnostic[] = "Authorisation error: \n".var_export([
        'a_signature_compute' => $a_signature_compute,
        'a_header_auth_valid' => $a_auth_valid
      ],true);
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

    // We further assume that the signature version is fixed.
    // If there is a different version, then it is necessary to reconsider the result returned by the method,
    // as well as the use of this result.
    WlAssertException::assertTrue(count($a_signature_compute)==5 && $a_signature_compute[1]==='1',[
      'a_signature_compute' => $a_signature_compute,
      'text_message' => 'Unexpected computed signature format.',
    ]);

    return [
      's_signature' => $a_signature_compute[0],
      's_signature_check' => $a_signature_compute[2]
    ];
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
    /** @var string|WlConfigAbstract $s_config_class */
    $s_config_class = get_class($this->o_config);
    $s_data = $s_config_class::postRawData();
    if(!$s_data)
    {
      $this->a_diagnostic[] = 'Request body us empty.';
      $this->a_variable = [];
      return [];
    }

    $a_variable = @json_decode($s_data,true);
    if(!is_array($a_variable))
    {
      $this->a_diagnostic[] = 'Error in request variable format: '.$s_data;
      $this->a_variable = [];
      return [];
    }

    $this->a_variable = $a_variable;
    return $this->a_variable;
  }
}

?>