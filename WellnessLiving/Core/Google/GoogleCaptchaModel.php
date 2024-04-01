<?php

namespace WellnessLiving\Core\Google;

use WellnessLiving\WlModelAbstract;

/**
 * Stores the user token CAPTCHA.
 */
class GoogleCaptchaModel extends WlModelAbstract
{
  /**
   * The action name.
   *
   * Used to determine the place where the CAPTCHA is needed in documentation for endpoints that used
   * the CAPTCHA.
   *
   * @put post
   * @var string
   */
  public $text_action = '';

  /**
   * The user token CAPTCHA.
   *
   * @put post
   * @var string
   */
  public $text_token = '';
}

?>