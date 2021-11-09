<?php

namespace WellnessLiving\Config;

use WellnessLiving\WlAssertException;
use WellnessLiving\WlRegionSid;

/**
 * Contains WellnessLiving SDK configuration.
 *
 * To use it, create a class that inherits this class, and override constants.
 * To use it, create a class that inherits this class and override
 * the {@link \WellnessLiving\Config\WlConfigAbstract::AUTHORIZE_CODE} and
 * {@link \WellnessLiving\Config\WlConfigAbstract::AUTHORIZE_ID} constants.
 *
 * To create a configuration object, use the {@link \WellnessLiving\Config\WlConfigAbstract::create()} method
 * on behalf of the inherited class.
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
   * Name of a persistent cookie by default.
   */
  public const COOKIE_PERSISTENT='sp';

  /**
   * Name of a transient cookie by default.
   */
  public const COOKIE_TRANSIENT='st';

  /**
   * List of rules, which is used to convert error codes to HTTP codes.
   *
   * Keys are names of class model or empty string.
   * * Empty string in a case if this is default rule.
   * * Class name in a case if there are specific rules for particular class. Class specific rules will override default rules.
   *
   * Value is a string with list of rules separated by comma. Each rule has the next format: <ul>
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
   * URL of the server (including trailing slash) by default.
   */
  public const URL='https://staging.wellnessliving.com/';

  /**
   * Name of a persistent cookie in the current configuration.
   *
   * `null` if not set.
   * In this case, the value of the constant {@link \WellnessLiving\Config\WlConfigAbstract::COOKIE_PERSISTENT} will be applied.
   *
   * @var string|null
   */
  private ?string $s_cookie_persistent;

  /**
   * Name of a transient cookie in the current configuration.
   *
   * `null` if not set.
   * In this case, the value of the constant {@link \WellnessLiving\Config\WlConfigAbstract::COOKIE_TRANSIENT} will be applied.
   *
   * @var string|null
   */
  private ?string $s_cookie_transient;

  /**
   * URL of the server in the current configuration (including trailing slash).
   *
   * `null` if not set.
   * In this case, the value of the constant {@link \WellnessLiving\Config\WlConfigAbstract::URL} will be applied.
   *
   * @var string|null
   * @see \WellnessLiving\Config\WlConfigAbstract::url()
   */
  private ?string $url_host;

  /**
   * Asserts that configuration object is configured correctly.
   *
   * @throws WlAssertException In a case of an error with configuration settings.
   */
  public function assertValid():void
  {
    WlAssertException::assertTrue($this->s_cookie_persistent===null || is_string($this::COOKIE_PERSISTENT)&&$this::COOKIE_PERSISTENT,[
      'text_message' => get_class($this).'::COOKIE_PERSISTENT is not set.'
    ]);
    WlAssertException::assertTrue($this->s_cookie_transient===null || is_string($this::COOKIE_TRANSIENT)&&$this::COOKIE_TRANSIENT,[
      'text_message' => get_class($this).'::COOKIE_TRANSIENT is not set.'
    ]);
    WlAssertException::assertTrue($this->url_host===null || is_string($this::URL)&&$this::URL,[
      'text_message' => get_class($this).'::URL is not set.'
    ]);
  }

  /**
   * Gets the name of a persistent cookie in the current configuration.
   *
   * @return string
   */
  final public function cookiePersistent(): string
  {
    return $this->s_cookie_persistent ?: $this::COOKIE_PERSISTENT;
  }

  /**
   * Gets the name of a transient cookie in the current configuration.
   *
   * @return string
   */
  final public function cookieTransient(): string
  {
    return $this->s_cookie_transient ?: $this::COOKIE_TRANSIENT;
  }

  /**
   * Creates a configuration object.
   *
   * @param int $id_region ID of a region in which information about this business is stored.
   *   One of {@link \WellnessLiving\WlRegionSid} constants.
   * @param bool $is_production `true` if the config object is for production use.
   *   `false` if the configuration object is for testing purposes of WellnessLiving API calls.
   * @return WlConfigAbstract Configuration object.
   * @throws WlAssertException In a case of an error with argument.
   */
  final public static function create(int $id_region,bool $is_production): WlConfigAbstract
  {
    static $a_config_production = [
      WlRegionSid::AP_SOUTHEAST_2 => [
        's_cookie_persistent' => 'p',
        's_cookie_transient' => 't',
        'url' => 'https://au.wellnessliving.com/',
      ],

      WlRegionSid::US_EAST_1 => [
        's_cookie_persistent' => 'p',
        's_cookie_transient' => 't',
        'url' => 'https://au.wellnessliving.com/',
      ],
    ];

    static $a_config_develop = [
      WlRegionSid::AP_SOUTHEAST_2 => [
        's_cookie_persistent' => 'sp',
        's_cookie_transient' => 'st',
        'url' => 'https://demo.wellnessliving.com/',
      ],

      WlRegionSid::US_EAST_1 => [
        's_cookie_persistent' => 'sp',
        's_cookie_transient' => 'st',
        'url' => 'https://staging.wellnessliving.com/',
      ],
    ];

    $a_region_all = WlRegionSid::all();
    WlAssertException::assertTrue(in_array($id_region,$a_region_all),[
      'id_region' => $id_region,
      'text_message' => static::class.'::create() Bad region id.'
    ]);

    $a_config = $is_production ? $a_config_production : $a_config_develop;

    $o_config = new static();
    $o_config->s_cookie_persistent = !empty($a_config[$id_region]) ? $a_config[$id_region]['s_cookie_persistent'] : static::COOKIE_PERSISTENT;
    $o_config->s_cookie_transient = !empty($a_config[$id_region]) ? $a_config[$id_region]['s_cookie_transient'] : static::COOKIE_TRANSIENT;
    $o_config->url_host = !empty($a_config[$id_region]) ? $a_config[$id_region]['url'] : static::URL;

    return $o_config;
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

  /**
   * Returns URL of the server in the current configuration (including trailing slash).
   *
   * @return string URL of the server in the current configuration (including trailing slash).
   */
  final public function url(): string
  {
    return $this->url_host ?: $this::URL;
  }
}