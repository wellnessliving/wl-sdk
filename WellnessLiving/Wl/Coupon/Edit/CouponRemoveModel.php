<?php

namespace WellnessLiving\Wl\Coupon\Edit;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Removes Gift Card from the business.
 *
 * @method WlModelRequest post() Removes Gift Card from the business.
 */
class CouponRemoveModel extends WlModelAbstract
{
  /**
   * ID of the Gift Card that should be removed.
   *
   * @post post
   * @var string
   */
  public $k_coupon;
}

?>