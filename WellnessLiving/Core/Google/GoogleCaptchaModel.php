<?php

namespace WellnessLiving\Core\Google;

use WellnessLiving\WlModelAbstract;

/**
 * Api to store captcha user token.
 */
class GoogleCaptchaModel extends WlModelAbstract
{
  /**
   * Action name.
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