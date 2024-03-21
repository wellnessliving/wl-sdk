<?php

namespace WellnessLiving\Config;

use WellnessLiving\Wl\WlRegionSid;
use WellnessLiving\WlAssertException;

/**
 * Contains WellnessLiving SDK configuration.
 *
 * This class cannot be used as a parent of your config class.
 * Your config class must inherit from {@link WlConfigDeveloper} or
 * {@link WlConfigProduction}.
 *
 * The following constants should be overridden in your class:
 * * {@link WlConfigAbstract::AUTHORIZE_CODE};
 * * {@link WlConfigAbstract::AUTHORIZE_ID}.
 *
 * To create a configuration object, use the {@link WlConfigAbstract::create()} method
 * on behalf of your class configuration class. For example:<code>
 * <?php
 *     ...
 *     $o_config=ExampleConfig::create(WlRegionSid::US_EAST_1);
 *     ...
 * </code>
 *
 * @see \WlSdkExample\ExampleConfig
 */
abstract class WlConfigAbstract
{
  /**
   * The agent name in the http-request header.
   */
  const AGENT='WellnessLiving SDK/[SDK_VERSION] (PHP [PHP_VERSION])';

  /**
   * Secret code to authorize application.
   *
   * The value `null` is not valid. This constant must be overridden in inherited classes.
   *
   * @var string
   * @see \WlSdkExample\ExampleConfig
   */
  const AUTHORIZE_CODE=null;

  /**
   * Application ID.
   *
   * The value `null` is not valid. This constant must be overridden in inherited classes.
   *
   * @var string
   * @see \WlSdkExample\ExampleConfig
   */
  const AUTHORIZE_ID=null;

  /**
   * Name of the global cookie.
   *
   * `null` to disable handling of global cookies.
   *
   * @see WlConfigProduction
   * @see WlConfigDeveloper
   * @var string|null
   */
  const COOKIE_GLOBAL=null;

  /**
   * Names of persistent cookies by regions.
   *
   * The value `null` is not valid. This property must be overridden in inherited classes.
   *
   * The correct value for the property is an array of strings.
   * The keys of the array are the region IDs of the corresponding data centers. One of {@link WlRegionSid} constant.
   * The values are the names of transient cookies for these regions.
   * E.g. ['us-east-1' => 'sp', 'ap-southeast-2' => 'dp'].
   *
   * @see WlConfigProduction
   * @see WlConfigDeveloper
   * @var string[]|null
   */
  protected static $COOKIE_PERSISTENT=null;

  /**
   * Name of a transient cookie.
   *
   * The value `null` is not valid. This property must be overridden in inherited classes.
   *
   * The correct value for the property is an array of strings.
   * The keys of the array are the region IDs of the corresponding data centers. One of {@link WlRegionSid} constant.
   * The values are the names of transient cookies for these regions.
   * E.g. ['us-east-1' => 'st', 'ap-southeast-2' => 'dt'].
   *
   * @see WlConfigProduction
   * @see WlConfigDeveloper
   * @var string[]|null
   */
  protected static $COOKIE_TRANSIENT=null;

  /**
   * URL of the API endpoint by regions.
   *
   * The value `null` is not valid. This property must be overridden in inherited classes.
   *
   * The correct value for the property is an array of strings.
   * The keys of the array are the region IDs of the corresponding data centers. One of {@link WlRegionSid} constant.
   * The values are the URLs of the API endpoints for these regions.
   * E.g. ['us-east-1' => 'https://api.wellnessliving.com', 'ap-southeast-2' => 'https://api.wellnessliving.com.au'].
   *
   *
   * @var string[]|null
   * @see WlConfigProduction
   * @see WlConfigDeveloper
   */
  protected static $REGION_URL=null;

  /**
   * List of rules, which is used to convert error codes to HTTP codes.
   *
   * Keys are names of class models or are empty strings.
   * * Empty string in case if this is the default rule.
   * * Class name in case if there are specific rules for particular class. Class specific rules will override default rules.
   *
   * Value is a string with a list of rules separated by commas. Each rule has the following format: <ul>
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
   *   public static $RESULT_CONVERSION_RULES = [
   *     '' => 'default',
   *     \WellnessLiving\Core\Passport\User\LoginModel::class => '418 code-teapot,451 signature-empty'
   *   ];
   * </code>
   *
   * @var array
   */
  public static $RESULT_CONVERSION_RULES = [];

  /**
   * Timeout to wait for connection to establish.
   */
  const TIMEOUT_CONNECT=60;

  /**
   * Timeout to wait for data reading from an established connection.
   */
  const TIMEOUT_READ=600;

  /**
   * ID of a region in which information about this business is stored.
   * One of {@link WlRegionSid} constants.
   *
   * @var int
   */
  private $id_region;

  /**
   * User-agent to use in API requests.
   *
   * If set, this value overrides value of {@link WlConfigAbstract::AGENT}.
   *
   * `null` to use {@link WlConfigAbstract::AGENT}.
   *
   * @var string|null
   */
  public $text_agent=null;

  /**
   * Prevents manual creation of a configuration object.
   *
   * @see WlConfigAbstract::create()
   */
  protected function __construct()
  {
  }

  /**
   * Returns name of the global cookie in the current configuration.
   *
   * @return string|null Name of the global cookie in the current configuration.
   *   `null` if handling of the global cookie must be disabled.
   */
  public function cookieGlobal()
  {
    return static::COOKIE_GLOBAL;
  }

  /**
   * Gets the name of a persistent cookie in the current configuration.
   *
   * @return string The name of a persistent cookie in the current configuration.
   */
  public function cookiePersistent()
  {
    return static::$COOKIE_PERSISTENT[$this->id_region];
  }

  /**
   * Gets the name of a transient cookie in the current configuration.
   *
   * @return string The name of a transient cookie in the current configuration.
   */
  public function cookieTransient()
  {
    return static::$COOKIE_TRANSIENT[$this->id_region];
  }

  /**
   * Creates a configuration object.
   *
   * @param int $id_region ID of a data center region in which information about this business is stored.
   *   One of {@link WlRegionSid} constants.
   * @return WlConfigAbstract Configuration object.
   * @throws WlAssertException In a case of an error with argument.
   */
  final public static function create($id_region)
  {
    WlAssertException::assertTrue(is_string(static::AUTHORIZE_CODE) && strlen(static::AUTHORIZE_CODE)>0,[
      'text_class' => static::class,
      'text_message' => 'The AUTHORIZE_CODE constant is not set. You need to override this constant in your configuration class.'
    ]);

    WlAssertException::assertTrue(is_string(static::AUTHORIZE_ID) && strlen(static::AUTHORIZE_ID)>0,[
      'text_class' => static::class,
      'text_message' => 'The AUTHORIZE_ID constant is not set. You need to override this constant in your configuration class.'
    ]);

    WlAssertException::assertTrue(static::COOKIE_GLOBAL===null||is_string(static::COOKIE_GLOBAL),[
      'text_class' => static::class,
      'text_message' => 'The COOKIE_GLOBAL constant is set to an invalid value. Use the correct parent class: WlConfigDeveloper or WlConfigProduction.'
    ]);

    WlAssertException::assertTrue(is_array(static::$COOKIE_TRANSIENT),[
      'text_class' => static::class,
      'text_message' => 'The COOKIE_TRANSIENT property is not set. Use the correct parent class: WlConfigDeveloper or WlConfigProduction.'
    ]);
    WlAssertException::assertTrue(isset(static::$COOKIE_TRANSIENT[$id_region]),[
      'text_class' => static::class,
      'text_message' => 'The COOKIE_TRANSIENT property does not contain name of a cookie for the requested datacenter region ID. Use the correct parent class: WlConfigDeveloper or WlConfigProduction.'
    ]);

    WlAssertException::assertTrue(is_array(static::$COOKIE_PERSISTENT),[
      'text_class' => static::class,
      'text_message' => 'The COOKIE_PERSISTENT property is not set. Use the correct parent class: WlConfigDeveloper or WlConfigProduction.'
    ]);
    WlAssertException::assertTrue(isset(static::$COOKIE_PERSISTENT[$id_region]),[
      'text_class' => static::class,
      'text_message' => 'The COOKIE_PERSISTENT property does not contain the name of the cookie for the requested datacenter region ID. Use the correct parent class: WlConfigDeveloper or WlConfigProduction.'
    ]);

    WlAssertException::assertTrue(is_array(static::$REGION_URL),[
      'text_class' => static::class,
      'text_message' => 'The REGION_URL constant is not set. Use the correct parent class: WlConfigDeveloper or WlConfigProduction.'
    ]);

    $a_region_all = WlRegionSid::all();
    WlAssertException::assertTrue(in_array($id_region,$a_region_all),[
      'id_region' => $id_region,
      'text_class' => static::class,
      'text_message' => 'Region does not exist. Please enter the correct region from "\WellnessLiving\Wl\WlRegionSid" class.'
    ]);

    WlAssertException::assertTrue(isset(static::$REGION_URL[$id_region]),[
      'text_class' => static::class,
      'text_message' => 'The URL endpoint API is not set for the requested data center region id. Let the developers know about it.'
    ]);

    $o_config = new static();
    $o_config->id_region = $id_region;

    return $o_config;
  }

  /**
   * Returns CSRF code.
   *
   * @param string $s_session_key Session key.
   * @return string Returns CSRF code based on specified session key.
   */
  final public function csrfCode($s_session_key)
  {
    $t_time = time();
    return hash('sha3-512',$s_session_key.'::'.$this::AUTHORIZE_CODE.'::'.$t_time).'.'.$t_time.'.'.substr($s_session_key,0,5);
  }

  /**
   * Returns URL of the server in the current configuration (including trailing slash).
   *
   * @return string URL of the server in the current configuration (including trailing slash).
   */
  public function url()
  {
    return static::$REGION_URL[$this->id_region];
  }
}