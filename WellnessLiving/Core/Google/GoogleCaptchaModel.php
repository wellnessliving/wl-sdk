<?php

namespace WellnessLiving\Core\Google;

use WellnessLiving\WlModelAbstract;

/**
 * Stores the user token CAPTCHA.
 *
 * @deprecated Use {@link \WellnessLiving\Core\Google\Captcha\GoogleCaptchaModel} instead of this.
 */
class GoogleCaptchaModel extends WlModelAbstract
{
  /**
   * Captcha version ID.
   *
   * @put post
   * @var int
   */
  public $id_version = 1;

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