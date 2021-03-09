<?php

namespace WellnessLiving\Config;

use WellnessLiving\WlAssertException;

/**
 * Contains WellnessLiving SDK configuration.
 *
 * To use it, create a class that inherits this class, and override constants.
 */
abstract class WlConfigAbstract
{
  /**
   * URL of the server (including trailing slash).
   */
  public const AGENT='WellnessLiving SDK/1.0 (WellnessLiving SDK)';

  /**
   * Secret code to authorize application.
   *
   * @var string
   */
  public const AUTHORIZE_CODE=null;

  /**
   * Application ID.
   *
   * @var string
   */
  public const AUTHORIZE_ID=null;

  /**
   * Name of a persistent cookie.
   */
  public const COOKIE_PERSISTENT='sp';

  /**
   * Name of a transient cookie.
   */
  public const COOKIE_TRANSIENT='st';

  /**
   * List of rules, which is used to convert error codes to HTTP codes.
   *
   * Keys are names of class model or empty string.
   * * Empty string in a case if this is default rule.
   * * Class name in a case if there are specific rules for particular class. Class specific rules will override default rules.
   *
   * Value is a string with list of rules separated by comma. Each rule has next format: <ul>
   *   <li>
   *     <tt>default</tt>
   *     Special rule with already predefined list of rules.
   *   </li>
   *   <li>
   *     <tt>[http code] [rule]</tt>
   *     Allow only 4xx codes. Check the list here: {@link https://en.wikipedia.org/wiki/List_of_HTTP_status_codes}.
   *     Rules can be in next format:<dl>
   *       <dt>[status]</dt>
   *       <dd>Exact value of the status.</dd>
   *       <dt>-[value]</dt>
   *       <dd>Can be used for any status, which ends with -[value].</dd>
   *       <dt>-[value]-/dt>
   *       <dd>Can be used for any status, which includes -[value]-.</dd>
   *       <dt>[value]-/dt>
   *       <dd>Can be used for any status, which starts with [value]-.</dd>
   *       <dt>-</dt>
   *       <dd>Code, which should be set, if status is not <tt>ok</tt>,but we do not have any corresponding code in the rules.</dd>
   *     </dl>
   *   </li>
   * </ul>
   *
   * Example: <code>
   *   public const RESULT_CONVERSION_RULES = [
   *     '' => 'default',
   *     \WellnessLiving\Core\Passport\User\LoginModel::class => '418 code-teapot,451 signature-empty'
   *   ];
   * </code>
   *
   * @var array
   */
  public const RESULT_CONVERSION_RULES = [];

  /**
   * Timeout to wait for connection to establish.
   */
  public const TIMEOUT_CONNECT=60;

  /**
   * Timeout to wait for data reading from an established connection.
   */
  public const TIMEOUT_READ=600;

  /**
   * URL of the server (including trailing slash).
   */
  public const URL='https://staging.wellnessliving.com/';

  /**
   * Asserts that configuration object is configured correctly.
   *
   * @throws WlAssertException In a case of an error with configuration settings.
   */
  public function assertValid():void
  {
    WlAssertException::assertTrue(is_string($this::COOKIE_PERSISTENT)&&$this::COOKIE_PERSISTENT,[
      'text_message' => get_class($this).'::COOKIE_PERSISTENT is not set.'
    ]);
    WlAssertException::assertTrue(is_string($this::COOKIE_TRANSIENT)&&$this::COOKIE_TRANSIENT,[
      'text_message' => get_class($this).'::COOKIE_TRANSIENT is not set.'
    ]);
    WlAssertException::assertTrue(is_string($this::URL)&&$this::URL,[
      'text_message' => get_class($this).'::URL is not set.'
    ]);
  }

  /**
   * Returns CSRF code.
   *
   * @param string $s_session_key Session key.
   * @return string Returns CSRF code based on specified session key.
   * @throws WlAssertException In a case of an error with configuration settings.
   */
  final public function csrfCode(string $s_session_key): string
  {
    WlAssertException::assertTrue(is_string($this::AUTHORIZE_CODE)&&$this::AUTHORIZE_CODE,[
      'text_message' => get_class($this).'::AUTHORIZE_CODE is not set.'
    ]);

    $t_time = time();
    return hash('sha3-512',$s_session_key.'::'.$this::AUTHORIZE_CODE.'::'.$t_time).'.'.$t_time.'.'.substr($s_session_key,0,5);
  }
}