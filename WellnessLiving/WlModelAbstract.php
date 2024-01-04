<?php

namespace WellnessLiving;

use WellnessLiving\Config\WlConfigAbstract;

/**
 * Represents base class for all models.
 */
class WlModelAbstract
{
  /**
   * Cache for result of {@link WlModelAbstract::fieldConfig()}.
   *
   * Key is name of the class. Value is result of {@link WlModelAbstract::fieldConfig()}.
   *
   * @var array
   */
  private static $_a_field=[];

  /**
   * SDK configuration object.
   *
   * @var WlConfigAbstract
   */
  private $_o_config;

  /**
   * Cookies object.
   *
   * <tt>null</tt> if not initialized yet. It is initialized with an empty set of cookies during request to server.
   *
   * @var null|WlModelCookie
   */
  private $_o_cookie = null;

  /**
   * The last request that was performed with this model.
   *
   * `null` if there were no requests performed with this model.
   *
   * @var WlModelRequest|null
   */
  private $_o_request=null;

  /**
   * Constructs a new model object.
   *
   * @param WlConfigAbstract $o_config WellnessLiving SDK configuration object.
   * @throws WlAssertException In a case of errors with configuration settings.
   */
  public function __construct(WlConfigAbstract $o_config)
  {
    $this->resource(); // Just to check that resource is set correctly.
    $this->_o_config=$o_config;
  }

  /**
   * Checks if posted data contains files to be uploaded.
   *
   * Converts found files to objects of <tt>CURLFile</tt> class.
   *
   * @param mixed $x_data Posted data.
   * @return bool <tt>true</tt> if posted data contains at least 1 file; <tt>false</tt> otherwise.
   */
  private function _fileCheck(&$x_data)
  {
    if(is_object($x_data)&&($x_data instanceof WlFile))
    {
      $x_data = curl_file_create($x_data->name(),$x_data->mime(),$x_data->postname());
      return true;
    }

    if(!is_array($x_data))
      return false;

    $is_file = false;
    foreach($x_data as &$x_value)
    {
      if($this->_fileCheck($x_value))
        $is_file = true;
    }
    unset($x_value);

    return $is_file;
  }

  /**
   * Closes curl resource.
   *
   * @param resource $r_curl Curl resource.
   */
  protected function closeCurl($r_curl)
  {
    curl_close($r_curl);
  }

  /**
   * Gets model configuration.
   *
   * @return WlConfigAbstract Model configuration.
   */
  public function config()
  {
    return $this->_o_config;
  }

  /**
   * Returns cookies object.
   *
   * @return WlModelCookie|null Cookies object. <tt>null</tt> if not initialized yet.
   */
  public function cookieGet()
  {
    return $this->_o_cookie;
  }

  /**
   * Sets cookies.
   *
   * @param WlModelCookie $o_cookie Cookies to set.
   */
  public function cookieSet(WlModelCookie $o_cookie)
  {
    $this->_o_cookie = $o_cookie;
  }

  /**
   * Performs request with DELETE method.
   *
   * @return WlModelRequest Object with complete request data.
   * @throws WlAssertException In a case of an assertion.
   * @throws WlUserException In a case of a user-level error.
   */
  public function delete()
  {
    return $this->request('delete');
  }

  /**
   * Returns field configuration of the model.
   *
   * @return array[] Field configuration of the model. Each element of array contains:<dl>
   *   <dt>array [<var>delete</var>=[]]</dt>
   *   <dd>Configuration of the field for DELETE request (see structure below).</dd>
   *   <dt>array [<var>get</var>=[]]</dt>
   *   <dd>Configuration of the field for GET request (see structure below).</dd>
   *   <dt>array [<var>post</var>=[]]</dt>
   *   <dd>Configuration of the field for POST request (see structure below).</dd>
   *   <dt>array [<var>put</var>=[]]</dt>
   *   <dd>Configuration of the field for PUT request (see structure below).</dd>
   *   <dt>string|null [<var>s_class</var>=null]</dt>
   *   <dd>In a case this field contains an object, this configuration setting contains name of class of that object.
   *
   *     <tt>null</tt> if this field does not contain an object.
   *   </dd>
   *   </dl>
   *
   *   Configuration of the field for a request is an array with the following fields:<dl>
   *   <dt>bool [<var>get</var>=false]</dt>
   *   <dd>Whether this field should be passed to server with POST variables.</dd>
   *   <dt>bool [<var>post</var>=false]</dt>
   *   <dd>Whether this field should be passed to server with POST or PUT variables (in accordance to initial request).</dd>
   *   <dt>bool [<var>result</var>=false]</dt>
   *   <dd>Whether this field is returned by the server as a result of request.</dd>
   *   </dl>
   * @throws WlAssertException In a case of an assertion.
   */
  private static function fieldConfig()
  {
    $s_class = get_called_class();
    if(isset(WlModelAbstract::$_a_field[$s_class]))
      return WlModelAbstract::$_a_field[$s_class];

    try
    {
      $o_class = new \ReflectionClass($s_class);
    }
    catch (\ReflectionException $e)
    {
      throw new WlAssertException([
        'e' => $e,
        'text_message' => 'Error creating class reflection.'
      ],$e);
    }

    $a_property = $o_class->getProperties();
    $a_field = [];
    foreach($a_property as $o_property)
    {
      $s_comment = $o_property->getDocComment();
      preg_match_all('~@([a-z]+)( +([0-9A-Za-z_\\-., \\\\\\]\\[]+))?~',$s_comment,$a_match);
      $a_field_this=[];
      foreach($a_match[1] as $i_match => $s_value)
      {
        switch($s_value)
        {
          case 'get':
          case 'post':
          case 'put':
          case 'delete':
            if(!isset($a_field_this[$s_value]))
              $a_field_this[$s_value]=[];
            $a_operation=explode(',',$a_match[3][$i_match]);
            foreach($a_operation as $s_operation)
            {
              WlAssertException::assertTrue($s_operation==='get'||$s_operation==='post'||$s_operation==='result',[
                's_class' => $s_class,
                's_field' => $o_property->name,
                's_mode' => $s_value,
                's_operation' => $s_operation,
                'text_message' => 'Invalid operation name.',
              ]);

              WlAssertException::assertTrue(!isset($a_field_this[$s_value][$s_operation]),[
                's_class' => $s_class,
                's_field' => $o_property->name,
                's_method' => $s_value,
                's_operation' => $s_operation,
                'text_message' => 'Duplicate definition of an operation within a request method.',
              ]);

              $a_field_this[$s_value][$s_operation]=true;
            }

            WlAssertException::assertTrue(count($a_field_this[$s_value])>0,[
              's_class' => $s_class,
              's_field' => $o_property->name,
              's_mode' => $s_value,
              'text_message' => 'No operations specified for a mode.',
            ]);
            WlAssertException::assertTrue($s_value!=='get'||empty($a_field_this[$s_value]['post']),[
              's_class' => $s_class,
              's_field' => $o_property->name,
              'text_message' => 'It is not allowed to specify POST operation for GET method.'
            ]);
            WlAssertException::assertTrue(empty($a_field_this[$s_value]['get'])||empty($a_field_this[$s_value]['post']),[
              's_class' => $s_class,
              's_field' => $o_property->name,
              'text_message' => 'It is not allowed to specify both POST and GET method. Only one of two is allowed.'
            ]);

            break;
        }
      }

      if(!count($a_field_this))
        continue;

      WlAssertException::assertTrue(!$o_property->isStatic(),[
        's_class' => $s_class,
        's_field' => $o_property->name,
        'text_message' => 'Field marked for sending can not be static.'
      ]);

      $a_field[$o_property->name]=$a_field_this;
    }

    WlModelAbstract::$_a_field[$s_class] = $a_field;

    return $a_field;
  }

  /**
   * Performs request with GET method.
   *
   * @return WlModelRequest Object with complete request data.
   * @throws WlAssertException In a case of an assertion.
   * @throws WlUserException In a case of a user-level error.
   */
  public function get()
  {
    return $this->request('get');
  }

  /**
   * Normalizes value for sending over HTTP.
   *
   * @param string $s_name Name of a field which value is normalized.
   * @param mixed $x_value Value to normalize.
   * @return array|string Normalized value.
   */
  private function normalizeValue($s_name,$x_value)
  {
    if(is_string($x_value))
      return $x_value;
    if(is_numeric($x_value))
      return (string)$x_value;
    if($x_value===true)
      return '1';
    if($x_value===false)
      return '';
    if($x_value instanceof WlFile)
      return $x_value;

    WlAssertException::assertTrue(is_array($x_value),[
      's_class' => get_class($this),
      's_property' => $s_name,
      'text_message' => 'Invalid value in a field of an SDK model. Only strings, boolean and arrays are allowed.',
      'x_value' => $x_value
    ]);

    foreach($x_value as $s_key => &$x_element)
    {
      if($x_element===null)
        unset($x_value[$s_key]);
      else
        $x_element=$this->normalizeValue($s_name.'.'.$s_key,$x_element);
    }
    unset($x_element);

    return $x_value;
  }

  /**
   * Performs request with POST method.
   *
   * @return WlModelRequest Object with complete request data.
   * @throws WlAssertException In a case of an assertion.
   * @throws WlUserException In a case of a user-level error.
   */
  public function post()
  {
    return $this->request('post');
  }

  /**
   * Returns the last request object with was performed with this API model.
   *
   * @return WlModelRequest|null The last request object with was performed with this API model.
   */
  public function lastRequest()
  {
    return $this->_o_request;
  }

  /**
   * Performs request with PUT method.
   *
   * @return WlModelRequest Object with complete request data.
   * @throws WlAssertException In a case of an assertion.
   * @throws WlUserException In a case of a user-level error.
   */
  public function put()
  {
    return $this->request('put');
  }

  /**
   * Performs a request.
   *
   * @param string $s_method Request method. One of <tt>'get'</tt>, <tt>'post'</tt>, <tt>'put'</tt>, <tt>'delete'</tt>.
   * @return WlModelRequest Object with complete request data.
   * @throws WlAssertException In a case of an assertion.
   * @throws WlUserException In a case of a user-level error.
   */
  private function request($s_method)
  {
    $a_request = $this->requestPrepare($s_method);

    $s_response = curl_exec($a_request['r_curl']);

    return $this->requestResult($s_method, $a_request['r_curl'], $a_request['o_request'], $a_request['a_field'], $s_response, $a_request['s_post']);
  }

  /**
   * Prepares the Curl request.
   *
   * @param string $s_method Method of the request. One of the next values: 'get', 'post', 'put', 'delete'.
   * @return array Data with prepared request with the following structure:
   * <dl>
   *   <dt>array <var>a_field</var> List of all prepared fields to be send via CURL.</dt>
   *   <dt>{@link WlModelRequest} <var>o_request</var> Object with complete request data.</dt>
   *   <dt>resource <var>r_curl</var> Curl resource.</dt>
   * </dl>
   *
   * @throws WlAssertException In a case of an assertion.
   * @throws WlUserException  In a case of error with user data.
   */
  protected function requestPrepare($s_method)
  {
    $o_request = new WlModelRequest();
    $this->_o_request=$o_request;

    /** @var WlConfigAbstract $s_config_class */
    $s_config_class = get_class($this->_o_config);

    $o_request->o_config = $this->_o_config;
    $o_request->s_resource = $this->resource();
    $o_request->url = $this->_o_config->url().$o_request->s_resource;

    $o_request->dt_request = WlTool::dateNowMysql();
    $o_request->a_header_request['Date'] = WlTool::dateMysqlHttp($o_request->dt_request);
    $o_request->a_header_request['User-Agent'] = $this->_o_config->text_agent?:$s_config_class::AGENT;
    $o_request->s_method = $s_method;

    $a_field=$this::fieldConfig();

    $a_post=[];
    $a_get=[];
    $a_variable=[];
    foreach($a_field as $s_field => $a_method)
    {
      if(empty($a_method[$s_method]))
        continue;
      $x_value=$this->$s_field;
      if($x_value===null)
        continue;

      $x_value=$this->normalizeValue($s_field,$x_value);

      if(!empty($a_method[$s_method]['get']))
      {
        $a_get[$s_field] = $x_value;
        $a_variable[$s_field]=$x_value;
      }
      elseif(!empty($a_method[$s_method]['post']))
      {
        $a_post[$s_field] = $x_value;
        $a_variable[$s_field]=$x_value;
      }
    }

    $o_request->a_variable = $a_variable;
    if(count($a_get))
      $o_request->url.='?'.http_build_query($a_get);

    $r_curl = curl_init($o_request->url);
    if(!$r_curl)
    {
      throw new WlUserException('request-connect','Could not connect WellnessLiving API.',[
        'o_request' => $o_request,
        's_class' => get_class($this),
        'url' => $o_request->url
      ]);
    }

    if(!$this->_o_cookie)
      $this->_o_cookie=new WlModelCookie();

    WlAssertException::assertTrue($this->_o_cookie instanceof WlModelCookie,[
      's_class' => get_class($this),
      'text_message' => 'Cookies object is not initialized.'
    ]);
    $o_request->o_cookie = $this->_o_cookie;

    $o_request->authorize();

    $s_cookie = $this->_o_cookie->toHeader();
    if($s_cookie)
      $o_request->a_header_request['Cookie'] = $s_cookie;

    // If posted data contains files, type of request content may be only 'multipart/form-data'.
    if($this->_fileCheck($a_post))
      $o_request->a_header_request['Content-Type'] = 'multipart/form-data';

    $s_post='';
    if($s_method==='put'||$s_method==='delete')
    {
      curl_setopt($r_curl,CURLOPT_CUSTOMREQUEST,strtoupper($s_method));
      if(count($a_post))
      {
        // If we are doing PUT/DELETE request need to specify a content-length header and set post fields as a string.
        $s_post = http_build_query($a_post);
        $o_request->a_header_request['Content-Length']=strlen($s_post);
        curl_setopt($r_curl,CURLOPT_POSTFIELDS,$s_post);
      }
    }
    elseif($s_method==='post')
    {
      curl_setopt($r_curl,CURLOPT_POST,true);

      // Some requests require data to be passed as string and some requires an array.
      // when data passed as an array Content-type automatically set to "multipart/form-data".
      // To indicate that we want to pass array we should specify content type in specific model otherwise data will be
      // passed as a string
      if(
        empty($o_request->a_header_request['Content-Type'])||
        $o_request->a_header_request['Content-Type']!=='multipart/form-data'
      )
      {
        $s_post = http_build_query($a_post);
        $o_request->a_header_request['Content-Length']=strlen($s_post);
        $a_post=$s_post;
      }
      curl_setopt($r_curl,CURLOPT_POSTFIELDS,$a_post);
    }

    if($o_request->a_option)
    {
      foreach($o_request->a_option as $s_option => $x_value)
        curl_setopt($r_curl,$s_option,$x_value);
    }

    $s_rule = isset($s_config_class::$RESULT_CONVERSION_RULES[get_class($this)]) ?
      $s_config_class::$RESULT_CONVERSION_RULES[get_class($this)] :
      (
      isset($s_config_class::$RESULT_CONVERSION_RULES['']) ?
        $s_config_class::$RESULT_CONVERSION_RULES[''] :
        null
      );

    if($s_rule)
      $o_request->a_header_request['X-Error-Rules'] = $s_rule;

    curl_setopt($r_curl,CURLOPT_HEADER,true);
    curl_setopt($r_curl,CURLOPT_HTTPHEADER,$o_request->headerCurl());
    curl_setopt($r_curl,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($r_curl,CURLOPT_CONNECTTIMEOUT,$s_config_class::TIMEOUT_CONNECT);
    curl_setopt($r_curl,CURLOPT_TIMEOUT,$s_config_class::TIMEOUT_READ);
    curl_setopt($r_curl,CURLOPT_VERBOSE,true);
    curl_setopt($r_curl,CURLINFO_HEADER_OUT,true);
    curl_setopt($r_curl,CURLOPT_FOLLOWLOCATION,true);

    return [
      'a_field' => $a_field,
      'o_request' => $o_request,
      's_post' => $s_post,
      'r_curl' => $r_curl
    ];
  }

  /**
   * Returns the result object from executed Curl.
   *
   * @param string $s_method Method of the request. One of the next values: 'get', 'post', 'put', 'delete'.
   * @param resource $r_curl Curl resource.
   * @param WlModelRequest $o_request Object with request data.
   * @param array $a_field List of all prepared fields to be sent via CURL.
   * @param string $s_response Curl response string.
   * @param string $s_post Contents of the request body.
   * @return WlModelRequest Object with complete request data.
   * @throws WlUserException  In a case of error with user data.
   */
  protected function requestResult($s_method, $r_curl, WlModelRequest $o_request, array $a_field, $s_response, $s_post)
  {
    $s_error = curl_error($r_curl);
    $i_header=curl_getinfo($r_curl,CURLINFO_HEADER_SIZE);
    $s_header=substr($s_response,0,$i_header);
    $s_body=substr($s_response,$i_header);
    $o_request->s_request=curl_getinfo($r_curl,CURLINFO_HEADER_OUT).$s_post;
    $o_request->s_response=$s_response;

    // Extract cookies.
    preg_match_all('~Set-Cookie: ([a-zA-Z]+)=([a-zA-Z0-9]+)~i',$s_header,$a_match);
    foreach($a_match[1] as $i => $s_name)
      $this->_o_cookie->cookieSet($s_name,$a_match[2][$i]);

    $this->closeCurl($r_curl);

    if($s_error)
    {
      throw new WlUserException('request-error','Error executing request to WellnessLiving API (error is reported by network).',[
        'o_request' => $o_request,
        's_class' => get_class($this),
        's_error' => $s_error,
        's_result' => $s_response,
        'url' => $o_request->url
      ]);
    }

    if(!$s_response||!$s_body)
    {
      throw new WlUserException('request-empty','Error executing request to WellnessLiving API (an empty response is returned).',[
        'o_request' => $o_request,
        's_class' => get_class($this),
        's_result' => $s_response,
        'url' => $o_request->url
      ]);
    }

    $o_request->a_result = json_decode($s_body,true);

    if(!$o_request->a_result||!is_array($o_request->a_result)||!isset($o_request->a_result['status']))
    {
      throw new WlUserException('request-parse','Error executing request to WellnessLiving API (could not parse response).',[
        'a_result' => $o_request->a_result,
        'o_request' => $o_request,
        's_result' => $s_response,
        's_class' => get_class($this),
        'url' => $o_request->url
      ]);
    }

    if($o_request->a_result['status']!=='ok')
      throw WlUserException::createApi($o_request);

    foreach($a_field as $s_field => $a_method)
    {
      if(empty($a_method[$s_method]))
        continue;
      if(empty($a_method[$s_method]['result']))
        continue;

      if(array_key_exists($s_field,$o_request->a_result))
        $this->$s_field=$o_request->a_result[$s_field];
      else
        $this->$s_field=null;
    }

    return $o_request;
  }

  /**
   * Returns URI of current model.
   *
   * @return string URI of current model.
   * @throws WlAssertException In a case of an assertion.
   */
  protected function resource()
  {
    WlAssertException::assertNotEmpty(!!preg_match('~^WellnessLiving\\\\(([A-Za-z]+\\\\)*)([A-Za-z]+_)?([A-Za-z0-9]+)Model$~',get_class($this),$a_match),[
      's_class' => get_class($this),
      'text_message' => 'API model class name is invalid. `Model` suffix is missing.'
    ]);

    return str_replace('\\','/',$a_match[1].$a_match[4]).'.json';
  }
}

?>