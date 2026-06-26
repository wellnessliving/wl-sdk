<?php

namespace WellnessLiving\Wl\Catalog\StaffApp\CatalogCoupon;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Coupon validation API.
 *
 * @method WlModelRequest get() Performs validation of the coupon added to the cart.
 */
class CatalogCouponModel extends WlModelAbstract
{
  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Coupon ID.
   * Primary key in {@link \RsCouponSql}
   *
   * @get get
   * @var string
   */
  public $k_coupon = '';

  /**
   * Coupon amount ID.
   * Primary key in {@link \Wl\Coupon\AmountSql}
   *
   * @get get
   * @var string
   */
  public $k_coupon_amount = '';

  /**
   * Custom coupon code.
   *
   * @get get
   * @var string
   */
  public $s_code = '';
}

?>