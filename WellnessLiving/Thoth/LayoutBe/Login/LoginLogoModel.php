<?php

namespace WellnessLiving\Thoth\LayoutBe\Login;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API for login logo template.
 *
 * @method WlModelRequest get()
 */
class LoginLogoModel extends WlModelAbstract
{
  /**
   * Logo height.
   *
   * @get get,result
   * @var int
   */
  public $i_height = 0;

  /**
   * Logo width.
   *
   * @get get,result
   * @var int
   */
  public $i_width = 0;

  /**
   * Whether staff photo should be excluded.
   * `true` - staff photo should be excluded, `false` - otherwise.
   *
   * @get get
   * @var bool
   */
  public $not_staff = false;

  /**
   * Logo URL.
   *
   * @get result
   * @var string
   */
  public $url_logo = '';
}

?>