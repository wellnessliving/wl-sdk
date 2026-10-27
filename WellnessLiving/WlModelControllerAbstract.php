<?php

namespace WellnessLiving;

/**
 * Represents base class for the models of API controllers of the new style.
 *
 * Unlike {@link WlModelAbstract}, a model of such a controller has no fields: every method takes an object with the
 * fields of the request and returns an object with the fields of the result. The classes of these objects and the
 * resource of the controller are described by the generated model: the method
 * {@link WlModelControllerAbstract::controllerConfig()} and the constant <tt>URL_CONTROLLER</tt> (the resource as the
 * server serves it, with the extension). The fields of the objects are their public properties.
 *
 * The signature, the cookies and the processing of errors are the same as in {@link WlModelAbstract}.
 */
abstract class WlModelControllerAbstract extends WlModelAbstract
{
  /**
   * Cache for result of {@link WlModelControllerAbstract::fieldConfig()}.
   *
   * Key is name of the class. Value is result of {@link WlModelControllerAbstract::fieldConfig()}.
   *
   * @var array
   */
  private static $_a_config=[];

  /**
   * Methods that a controller may have.
   *
   * @var string[]
   */
  private static $_a_method = ['delete','get','patch','post','put'];

  /**
   * Fields of the request that is performed now.
   *
   * Key is name of the field. Empty if there is no request performed.
   *
   * @var array
   */
  private $_a_request=[];

  /**
   * Fields of the result of the request that is performed now.
   *
   * Key is name of the field. Empty if there is no request performed.
   *
   * @var array
   */
  private $_a_result=[];

  /**
   * Converts booleans to numbers: a controller of the new style reads <tt>1</tt> and <tt>0</tt>, not an empty string.
   *
   * @param mixed $x_value Value to convert.
   * @return mixed Converted value.
   */
  private function _boolConvert($x_value)
  {
    if(is_bool($x_value))
      return $x_value ? 1 : 0;

    if(is_array($x_value))
    {
      foreach($x_value as $s_key => $x_element)
        $x_value[$s_key] = $this->_boolConvert($x_element);
    }

    return $x_value;
  }

  /**
   * Describes the methods of the controller.
   *
   * @return array[] Key is name of the method in lower case (<tt>delete</tt>, <tt>get</tt>, <tt>patch</tt>,
   *   <tt>post</tt>, <tt>put</tt>). Only the methods that the controller implements are listed. Each element is:<dl>
   *   <dt>string|null <var>s_class_request</var></dt>
   *   <dd>Name of the class of the request. <tt>null</tt> if the method has no request.</dd>
   *   <dt>string <var>s_class_response</var></dt>
   *   <dd>Name of the class of the result.</dd>
   *   </dl>
   * @throws WlAssertException In a case the model does not override this method.
   */
  protected static function controllerConfig()
  {
    // The method is not abstract: a static abstract method is called through `static::` here, and IDE reports it.
    WlAssertException::fail([
      's_class' => get_called_class(),
      'text_message' => 'The model of an API controller must override the method `controllerConfig()`.',
    ]);

    return [];
  }

  /**
   * Performs request with DELETE method.
   *
   * @param object|null $o_request Request. <tt>null</tt> if the method has no request.
   * @return object Result. An object of the class that the model describes for the method.
   * @throws WlAssertException In a case of an assertion.
   * @throws WlUserException In a case of a user-level error.
   */
  public function delete($o_request=null)
  {
    return $this->requestObject('delete',$o_request);
  }

  /**
   * @inheritDoc
   *
   * For the controller the field is a property of the class of the request (in the URL for <tt>GET</tt> and
   * <tt>DELETE</tt>, in the body for the other methods) or a property of the class of the result.
   */
  protected static function fieldConfig()
  {
    $s_class = get_called_class();
    if(isset(WlModelControllerAbstract::$_a_config[$s_class]))
      return WlModelControllerAbstract::$_a_config[$s_class];

    $a_field = [];
    foreach(static::controllerConfig() as $s_method => $a_method)
    {
      WlAssertException::assertTrue(in_array($s_method,WlModelControllerAbstract::$_a_method,true),[
        's_class' => $s_class,
        's_method' => $s_method,
        'text_message' => 'Invalid name of a method of an API controller.',
      ]);

      $s_source = $s_method==='get' || $s_method==='delete' ? 'get' : 'post';
      if($a_method['s_class_request'])
      {
        foreach(array_keys(get_class_vars($a_method['s_class_request'])) as $s_field)
          $a_field[$s_field][$s_method][$s_source] = true;
      }

      foreach(array_keys(get_class_vars($a_method['s_class_response'])) as $s_field)
        $a_field[$s_field][$s_method]['result'] = true;
    }

    WlModelControllerAbstract::$_a_config[$s_class] = $a_field;

    return $a_field;
  }

  /**
   * @inheritDoc
   */
  protected function fieldValue($s_field)
  {
    return isset($this->_a_request[$s_field]) ? $this->_boolConvert($this->_a_request[$s_field]) : null;
  }

  /**
   * @inheritDoc
   */
  protected function fieldValueSet($s_field,$x_value)
  {
    $this->_a_result[$s_field] = $x_value;
  }

  /**
   * Performs request with GET method.
   *
   * @param object|null $o_request Request. <tt>null</tt> if the method has no request.
   * @return object Result. An object of the class that the model describes for the method.
   * @throws WlAssertException In a case of an assertion.
   * @throws WlUserException In a case of a user-level error.
   */
  public function get($o_request=null)
  {
    return $this->requestObject('get',$o_request);
  }

  /**
   * Performs request with PATCH method.
   *
   * @param object|null $o_request Request. <tt>null</tt> if the method has no request.
   * @return object Result. An object of the class that the model describes for the method.
   * @throws WlAssertException In a case of an assertion.
   * @throws WlUserException In a case of a user-level error.
   */
  public function patch($o_request=null)
  {
    return $this->requestObject('patch',$o_request);
  }

  /**
   * Performs request with POST method.
   *
   * @param object|null $o_request Request. <tt>null</tt> if the method has no request.
   * @return object Result. An object of the class that the model describes for the method.
   * @throws WlAssertException In a case of an assertion.
   * @throws WlUserException In a case of a user-level error.
   */
  public function post($o_request=null)
  {
    return $this->requestObject('post',$o_request);
  }

  /**
   * Performs request with PUT method.
   *
   * @param object|null $o_request Request. <tt>null</tt> if the method has no request.
   * @return object Result. An object of the class that the model describes for the method.
   * @throws WlAssertException In a case of an assertion.
   * @throws WlUserException In a case of a user-level error.
   */
  public function put($o_request=null)
  {
    return $this->requestObject('put',$o_request);
  }

  /**
   * Performs a request with the fields of an object.
   *
   * @param string $s_method Request method in lower case.
   * @param object|null $o_request Request. A property that is <tt>null</tt> is not sent.
   * @return object Result: an object of the class of the result of the method. All its properties are set, a property
   *   that the server did not return is <tt>null</tt>.
   * @throws WlAssertException In a case of an assertion.
   * @throws WlUserException In a case of a user-level error.
   */
  private function requestObject($s_method,$o_request)
  {
    $a_config = static::controllerConfig();

    WlAssertException::assertTrue(isset($a_config[$s_method]),[
      's_class' => get_class($this),
      's_method' => $s_method,
      'text_message' => 'The API controller does not have this method.',
    ]);

    $s_class_request = $a_config[$s_method]['s_class_request'];
    if($s_class_request)
    {
      WlAssertException::assertTrue($o_request instanceof $s_class_request,[
        's_class' => get_class($this),
        's_class_request' => $s_class_request,
        's_method' => $s_method,
        'text_message' => 'The request must be an object of the class that the method of the model describes.',
      ]);
    }
    else
    {
      WlAssertException::assertTrue($o_request===null,[
        's_class' => get_class($this),
        's_method' => $s_method,
        'text_message' => 'The method of the API controller has no request.',
      ]);
    }

    $this->_a_request = $o_request ? get_object_vars($o_request) : [];
    $this->_a_result = [];
    try
    {
      $this->request($s_method);

      $s_class_response = $a_config[$s_method]['s_class_response'];
      $o_response = new $s_class_response();
      foreach(array_keys(get_class_vars($s_class_response)) as $s_field)
        $o_response->$s_field = isset($this->_a_result[$s_field]) ? $this->_a_result[$s_field] : null;

      return $o_response;
    }
    finally
    {
      $this->_a_request = [];
      $this->_a_result = [];
    }
  }

  /**
   * @inheritDoc
   */
  protected function resource()
  {
    WlAssertException::assertTrue(defined(get_class($this).'::URL_CONTROLLER'),[
      's_class' => get_class($this),
      'text_message' => 'The model of an API controller must have the constant `URL_CONTROLLER`.',
    ]);

    return constant(get_class($this).'::URL_CONTROLLER');
  }
}

?>