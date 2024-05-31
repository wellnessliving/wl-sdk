<?php

namespace WellnessLiving;

use WellnessLiving\Config\WlConfigAbstract;

/**
 * A class with helper functions for working with webhooks.
 */
class WlWebhook
{
  /**
   * Request variable values.
   * Key is the variable name, value is the variable value.
   *
   * Cache for the {@link WlWebhook::variable()} method.
   *
   * `null` if the {@link WlWebhook::variable()} method was not called.
   * `false` if no request variables were passed or a data format error.
   *
   * @var array|null|false
   */
  private $a_variable = null;

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
    // The request parameters cannot be changed until it is processed.
    // After processing the request, the script will complete its work.
    static $is_authorize = null;

    if($is_authorize!==null)
      return $is_authorize;

    $is_authorize = false;

    $a_variable = $this->variable();
    if($a_variable===false)
      return false;

    /** @var WlConfigAbstract $s_config_class */
    $s_config_class = get_class($this->o_config);

    $a_auth = WlHeaderAuthorization::createFromRequest();
    $a_signature_receive = [];
    foreach($a_auth as $o_header_auth)
    {
      if(
        $o_header_auth->s_version==='20150518' &&
        $o_header_auth->s_application_id===$s_config_class::AUTHORIZE_ID &&
        $o_header_auth->s_signature!==null &&
        strlen($o_header_auth->s_signature)==64
      )
      {
        $a_signature_receive[] = $o_header_auth->s_signature;
      }
    }

    if(!$a_signature_receive)
      return false;

    $s_signature_compute = $this->signatureCompute();
    if(in_array($s_signature_compute,$a_signature_receive))
      $is_authorize = true;

    return $is_authorize;
  }

  /**
   * Computes the signatures of the current request.
   *
   * @return string The signature of the current request.
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

    // Truncate the debug information.
    $a_signature = explode('.',$s_signature_compute,2);
    return $a_signature[0];
  }

  /**
   * Gets the request variable values.
   *
   * @return array|false Request variable values.
   *   `false` if no request variables were passed or a data format error.
   */
  public function variable()
  {
    if($this->a_variable!==null)
      return $this->a_variable;

    // Variables come in the body of the POST request in the form of a json object.
    $s_data = file_get_contents('php://input');
    if(!$s_data)
    {
      $this->a_variable = false;
      return false;
    }

    $a_variable = @json_decode($s_data,true);
    if(!is_array($a_variable) || count($a_variable)==0)
      $this->a_variable = false;
    else
      $this->a_variable = $a_variable;

    return $this->a_variable;
  }
}

?>