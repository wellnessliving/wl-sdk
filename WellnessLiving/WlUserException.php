<?php

namespace WellnessLiving;

/**
 * This exception is thrown in a case of an error that should be shown to end user.
 *
 * Example error: user does not have access somewhere. This exception is thrown because this can not be checked at
 * client side. In a case of an error that can be checked at client side, {@link \WellnessLiving\WlDebugException} is
 * thrown.
 *
 * This exception contains a user-friendly message that can be shown to end user.
 *
 * @see \WellnessLiving\WlDebugException
 */
class WlUserException extends \Exception
{
  /**
   * Additional data for debugging purposes.
   *
   * @var array
   */
  private $a_data;

  /**
   * A list of errors that occurred during API request.
   *
   * Structure of one element is the following:<dl>
   *   <dt>string <var>html_message</var></dt><dd>HTML version of user-friendly error message.</dd>
   *   <dt>int <var>id</var></dt><dd>Numeric version of error code.</dd>
   *   <dt>string <var>s_field</var></dt><dd>Name of the field to which this error is bound.</dd>
   *   <dt>string <var>s_message</var></dt>
   *   <dd>Textual version of user-friendly error message (may contain unescaped HTML special characters!).</dd>
   *   <dt>string <var>sid</var></dt><dd>String version of error code.</dd>
   * </dl>
   *
   * @var array[]
   */
  private $a_error;

  /**
   * Result, as arrived from server.
   *
   * @var array
   */
  private $a_result;

  /**
   * Name of server-side exception class.
   *
   * <tt>null</tt> if information is not provided.
   *
   * @var string|null
   */
  private $s_class;

  /**
   * Error code, if provided.
   *
   * Copy of the first argument of {@link \WellnessLiving\WlUserException::__construct()} if this error does not
   * originate from API request.
   *
   * If error originates from API request, this code contains value returned by
   * {@link \WellnessLiving\WlUserException::sid()} by default (for error with index 0).
   *
   * <tt>null</tt> if error code was not provided.
   *
   * @var string|null
   */
  private $s_code='';

  /**
   * Constructs a user-level error.
   *
   * @param string $s_code Error code.
   * @param string $s_message User-friendly message.
   * @param array $a_data Additional data for debugging purposes.
   */
  public function __construct($s_code = '',$s_message = '',array $a_data=[])
  {
    $this->a_data=$a_data;
    $this->s_code=$s_code;
    parent::__construct($s_message,0);
  }

  /**
   * @inheritDoc
   */
  public function __toString()
  {
    $text_exception='';
    if($this->s_code)
      $text_exception.='['.$this->s_code.'] ';
    $text_exception.=get_class($this);
    if($this->s_class)
      $text_exception.=' / '.$this->s_class;
    $text_exception.=' is thrown with error message: '.$this->getMessage();
    if($this->a_result)
      $text_exception.="\r\n".var_export($this->a_result,true);
    elseif($this->a_error) // If Both, a_result and a_error specified, it is likely that a_result contains a_error inside.
      $text_exception.="\r\n".var_export($this->a_error,true);

    if($this->a_data)
      $text_exception.="\r\n".var_export($this->a_data,true);

    return $text_exception;
  }

  /**
   * Creates a new API model exception object.
   *
   * @param array $a_result Result, as returned by API endpoint server.
   * @return WlUserException User exception object.
   */
  public static function createApi(array $a_result):WlUserException
  {
    $a_error=$a_result['a_error']??[];
    $a_error_0=$a_error[0]??[];

    $e=new WlUserException($a_error_0['sid']??'unknown-error',$a_error_0['s_message']??'Unknown error.');
    $e->a_error=$a_error;
    $e->a_result=$a_result;
    $e->s_class=$a_result['class']??null;

    return $e;
  }

  /**
   * Returns string representation of a error code of the very first error in the exception.
   *
   * @param int $i_index Index of error to return error code for.
   * @return string|null String representation of a error code of the very first error in the exception.
   * <tt>null</tt> if no errors were added.
   */
  public function sid(int $i_index = 0):?string
  {
    if(!$this->a_error)
      return null;

    if(!empty($this->a_error[$i_index]['sid']))
      return $this->a_error[$i_index]['sid'];
    return null;
  }
}