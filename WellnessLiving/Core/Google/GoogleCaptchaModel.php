<?php

namespace WellnessLiving\Core\Google;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint to store the user token CAPTCHA.
 *
 * Site keys for initializing Google reCAPTCHA v2:
 * Demo/Staging key - `6Ldqwe0gAAAAANve1TEPFb_Yxgb9wsoIfrNL6-2Z`
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
  public $text_action;

  /**
   * The user token CAPTCHA.
   *
   * @put post
   * @var string
   */
  public $text_token;
}

?>