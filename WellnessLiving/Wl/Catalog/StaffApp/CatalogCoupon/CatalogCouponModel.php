<?php

namespace WellnessLiving\Wl\Catalog\StaffApp\CatalogCoupon;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Coupon validation API.
 *
 * @method WlModelRequest get() Performs validation of the coupon added to the cart.  Confirms that the actor has store-selling privilege for the business, that the coupon  and, when provided, the coupon amount both exist, and that a custom coupon code  (when provided) is not already used by another coupon.
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
   *
   * @get get
   * @var string
   */
  public $k_coupon = '';

  /**
   * Coupon amount ID.
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