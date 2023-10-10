<?php

namespace WellnessLiving\Core\Google;

use WellnessLiving\WlModelAbstract;

/**
 * Api to store captcha user token.
 *
 * Site keys for initialize Google reCAPTCHA v2:
 * * Demo/Staging - `6Ldqwe0gAAAAANve1TEPFb_Yxgb9wsoIfrNL6-2Z`
 */
class GoogleCaptchaModel extends WlModelAbstract
{
  /**
   * Action name.
   *
   * Used for determinate place where captcha needed,
   * in documentation for APIs which used captcha says which action it use.
   *
   * @put post
   * @var string
   */
  public $text_action;

  /**
   * Captcha user token.
   *
   * @put post
   * @var string
   */
  public $text_token;
}

?>