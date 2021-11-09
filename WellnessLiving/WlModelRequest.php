<?php

namespace WellnessLiving;

use WellnessLiving\Config\WlConfigAbstract;

/**
 * Contains all information about API model request.
 */
class WlModelRequest
{
  /**
   * A list of headers for the API request. See {@link CURLOPT_HTTPHEADER}.
   *
   * @var array
   */
  public $a_header_request = [];

  /**
   * Headers of API response.
   *
   * @var array
   */
  public $a_header_response = [];

  /**
   * List of additional options for the API request.
   *
   * Key - name of an option. Value - value of an option.
   *
   * @var array
   */
  public $a_option = [];

  /**
   * Results of the API request.
   *
   * <tt>null</tt> means that nothing was returned or data could not be parsed.
   *
   * @var null|array
   */
  public $a_result = null;

  /**
   * List of variables that are used in request.
   *
   * List of variables defined by specific API model.
   *
   * @var array
   */
  public $a_variable;

  /**
   * Date and time request execution.
   *
   * @var string
   */
  public $dt_request;

  /**
   * Config object.
   *
   * @var WlConfigAbstract
   */
  public $o_config;

  /**
   * Cookies object.
   *
   * @var WlModelCookie
   */
  public $o_cookie;

  /**
   * Method of the request.
   *
   * One of the next values: 'get', 'post', 'put', 'delete'.
   *
   * @var string
   */
  public $s_method;

  /**
   * Full HTTP response.
   *
   * @var string
   */
  public $s_response;

  /**
   * URI of the API request.
   *
   * @var string
   */
  public $s_resource;

  /**
   * URL link to perform request.
   *
   * @var string
   */
  public $url;

  /**
   * Authorizes current request.
   *
   * @throws WlAssertException In a case of an assertion.
   */
  public function authorize():void
  {
    WlAssertException::assertNotEmpty($this->o_config,[
      'text_message' => 'Configuration object should be set before call to authorize().'
    ]);
    WlAssertException::assertNotEmpty($this->url,[
      'text_message' => '$url should be set before call to authorize().'
    ]);

    $a_url = parse_url($this->url);
    $a_signature = [
      'a_header' => [],
      'a_variable' => $this->a_variable,
      'dt_time' => $this->dt_request,
      's_code' => $this->o_config::AUTHORIZE_CODE,
      's_cookie_persistent' => $this->o_cookie->cookieGet($this->o_config->cookiePersistent()),
      's_cookie_transient' => $this->o_cookie->cookieGet($this->o_config->cookieTransient()),
      's_host' => $a_url['host'],
      's_id' => $this->o_config::AUTHORIZE_ID,
      's_method' => strtoupper($this->s_method),
      's_resource' => $this->s_resource,
    ];

    $this->a_header_request['Authorization'] = '20150518,'.$this->o_config::AUTHORIZE_ID.',,'.WlModelRequest::signatureCompute($a_signature);
  }

  /**
   * Returns list of headers in appropriate format for a request.
   *
   * @return array List of headers in appropriate format for a request.
   */
  public function headerCurl():array
  {
    $a_header = [];
    foreach($this->a_header_request as $s_key => $s_value)
      $a_header[] = $s_key.': '.$s_value;
    return $a_header;
  }

  /**
   * Normalizes array for inclusion into a signature.
   *
   * This method also converts all keys lowercase.
   *
   * @param array $a_array Denormalized array to include into a signature. May contain sub-arrays.
   * @return array Normalized array to include into a signature. This is always a one-dimensional array where
   *   key is name of a variable as it would be used in <tt>application/x-www-form-urlencoded</tt>, and value is its
   *   value (both key and value are not urlencoded).
   */
  public static function signatureArray(array $a_array)
  {
    $a_result = [];
    foreach($a_array as $s_key => $x_value)
    {
      if(is_string($x_value)||is_numeric($x_value))
      {
        $a_result[strtolower($s_key)] = $x_value;
        continue;
      }
      if(is_object($x_value)&&($x_value instanceof WlFile))
      {
        $a_result[strtolower($s_key)] = hash_file('sha256',$x_value->name(),false);
        continue;
      }
      if(is_array($x_value))
      {
        $a_array_a=[];
        foreach($x_value as $s_key_a => $x_value_a)
          $a_array_a[$s_key.'['.$s_key_a.']'] = $x_value_a;

        $a_result_a = WlModelRequest::signatureArray($a_array_a);
        foreach($a_result_a as $s_key_a => $s_value_a)
          $a_result[$s_key_a]=$s_value_a;
        continue;
      }

      WlAssertException::fail([
        's_key' => $s_key,
        'text_message' => 'Invalid value.',
        'x_value' => $x_value
      ]);
    }
    return $a_result;
  }

  /**
   * Evaluates signature for specified data.
   *
   * @param array $a_data Data to evaluate signature for:<ul>
   *   <li>array <var>a_header</var> A list of headers to include in signature. Key is the name of header, value is
   *   its value.</li>
   *   <li>array <var>a_variable</var> A list of variables to include to signature. Key is the name of variable, value
   *   is its value.</li>
   *   <li>string <var>dt_time</var> Date/time of signature (in MySQL format).</li>
   *   <li>string <var>s_code</var> Secret code to authorize application.</li>
   *   <li>string <var>s_host</var> Server name (value of 'Host:' header).</li>
   *   <li>string <var>s_id</var> Application identifier to authenticate application.</li>
   *   <li>string <var>s_method</var> Request method ('GET', 'POST', 'PUT' or 'DELETE').</li>
   *   <li>string <var>s_resource</var> Resource name.</li>
   * </ul>
   * @return string Signature string.
   */
  public static function signatureCompute(array $a_data)
  {
    $a_signature=[];
    $a_signature[]='Core\\Request\\Api::20150518';

    $a_signature[]=$a_data['dt_time'];
    $a_signature[]=$a_data['s_code'];
    $a_signature[]=$a_data['s_host'];
    $a_signature[]=$a_data['s_id'];
    $a_signature[]=$a_data['s_method'];
    $a_signature[]=$a_data['s_resource'];
    $a_signature[]=$a_data['s_cookie_persistent'];
    $a_signature[]=$a_data['s_cookie_transient'];

    $a_variable=WlModelRequest::signatureArray($a_data['a_variable']);
    ksort($a_variable);
    foreach($a_variable as $s_key => $s_value)
      $a_signature[]=$s_key.'='.$s_value;

    $a_header=[];
    foreach($a_data['a_header'] as $s_key => $s_value)
      $a_header[strtolower($s_key)]=trim($s_value);
    ksort($a_header);
    foreach($a_header as $s_key => $s_value)
      $a_signature[]=$s_key.':'.$s_value;

    return hash('sha256',implode("\n",$a_signature));
  }
}

?>