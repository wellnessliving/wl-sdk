<?php

namespace WellnessLiving\Core\Captcha;

use WellnessLiving\WlModelAbstract;

/**
 * API for check that captcha is required.
 */
class CaptchaRequireModel extends WlModelAbstract
{
  /**
   * Arguments for creating captcha object.
   *
   * @get get
   * @var array
   */
  public $a_arguments = [];

  /**
   * CID of the captcha.
   *
   * @get get
   * @var int
   */
  public $cid_captcha = 0;

  /**
   * `true` if captcha is required, `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_require = false;
}

?>