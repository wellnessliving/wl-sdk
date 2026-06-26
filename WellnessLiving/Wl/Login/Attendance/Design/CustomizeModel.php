<?php

namespace WellnessLiving\Wl\Login\Attendance\Design;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manages design of attendance list.
 *
 * @method WlModelRequest get()
 * @method WlModelRequest post()
 */
class CustomizeModel extends WlModelAbstract
{
  /**
   * Field settings of attendance list.
   * The key is settings name (sid constant from {@link \Wl\Login\Attendance\Design\FieldListSid}) and the value is
   * settings value.
   *
   * @get result
   * @post post
   * @var array
   */
  public $a_field = [];

  /**
   * Business key.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $k_business = null;
}

?>