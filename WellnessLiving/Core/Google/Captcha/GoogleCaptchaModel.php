<?php

namespace WellnessLiving\Core\Google\Captcha;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Stores the user token CAPTCHA.
 *
 * Site keys for initialize Google reCAPTCHA:
 * * Version 2 (invisible):
 *   * Demo/Staging - {@link GoogleCaptchaKeys::CAPTCHA_V2_SITE_KEY_SANDBOX}
 *   * Production - {@link GoogleCaptchaKeys::CAPTCHA_V2_SITE_KEY_PRODUCTION}
 * * Version 3:
 *  * Demo/Staging - {@link GoogleCaptchaKeys::CAPTCHA_V3_SITE_KEY_SANDBOX}
 *  * Production - {@link GoogleCaptchaKeys::CAPTCHA_V3_SITE_KEY_PRODUCTION}
 *
 * @method WlModelRequest put() Saves the user CAPTCHA token for the current session.  Accepts the CAPTCHA version, the action name, and the user token obtained from the Google reCAPTCHA widget, and stores them in the session so that subsequent API requests requiring CAPTCHA verification can use them.
 */
class GoogleCaptchaModel extends WlModelAbstract
{
  /**
   * Captcha version ID.
   *
   * @put post
   * @var int
   * @see CaptchaVersionSid
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