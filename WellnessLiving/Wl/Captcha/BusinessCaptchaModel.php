<?php

namespace WellnessLiving\Wl\Captcha;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manages captcha enable setting for a business.
 *
 * @method WlModelRequest put() {@inheritdoc}  Saves the business CAPTCHA enabled setting.
 */
class BusinessCaptchaModel extends WlModelAbstract
{
  /**
   * `true` if captcha is enabled for the business, `false` otherwise.
   *
   * @put post
   * @var bool
   */
  public $is_captcha_enable = true;

  /**
   * Business key. 
   *
   * @put post
   * @var string
   */
  public $k_business = '';
}

?>