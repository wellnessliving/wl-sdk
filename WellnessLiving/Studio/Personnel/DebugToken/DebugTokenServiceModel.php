<?php

namespace WellnessLiving\Studio\Personnel\DebugToken;

use WellnessLiving\WlModelAbstract;

/**
 * Allows checking the validity of a debug token.
 */
class DebugTokenServiceModel extends WlModelAbstract
{
  /**
    * Debug token to check and if valid to return `true` otherwise `false`.
    *
    * @post result
    * @var bool
    */
  public $is_valid = false;

  /**
   * Passport bot login that sends the request to check the token.
   *
   * @post post
   * @var string
   */
  public $s_passport_bot_login = '';

  /**
    * Debug token to check.
    *
    * @post post
    * @var string
    */
  public $s_token = '';

  /**
   * Full URL of the request which was made to get access with testing token, including protocol, host, and URI.
   *
   * @post post
   * @var string
   */
  public $url_request = '';
}

?>