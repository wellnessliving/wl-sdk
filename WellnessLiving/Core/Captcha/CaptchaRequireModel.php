<?php

namespace WellnessLiving\Core\Captcha;

use WellnessLiving\WlModelAbstract;

/**
 * Checks if a CAPTCHA is required.
 */
class CaptchaRequireModel extends WlModelAbstract
{
  /**
   * Arguments for creating CAPTCHA object.
   *
   * @get get
   * @var array
   */
  public $a_arguments = [];

  /**
   * The CID of the CAPTCHA.
   *
   * @get get
   * @var int
   */
  public $cid_captcha = 0;

  /**
   * This will be `true` if a CAPTCHA is required. Otherwise, this will be `false`.
   *
   * @get result
   * @var bool
   */
  public $is_require = false;
}

?>