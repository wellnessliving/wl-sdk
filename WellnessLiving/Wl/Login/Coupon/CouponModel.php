<?php

namespace WellnessLiving\Wl\Login\Coupon;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves information about a gift card (also referred to as the coupon code).
 *
 * @method WlModelRequest get() Retrieves the key and balance of a gift card by its code for the specified business.  Validates the gift card code against the specified business, enforces a per-IP rate limit, and checks that the card is active, not already redeemed, not expired, and in the correct currency before returning its key and remaining balance.
 */
class CouponModel extends WlModelAbstract
{
  /**
   * The business key.
   *
   * @get get
   * @var string
   */
  public $k_business;

  /**
   * The gift card reference number for this specific user. WellnessLiving uses this reference number for managing
   * gift cards in the system.
   *
   * @get result
   * @var string
   */
  public $k_login_coupon;

  /**
   * The gift card amount.
   *
   * @get result
   * @var string
   */
  public $m_amount;

  /**
   * The gift card.
   *
   * @get get
   * @var string
   */
  public $s_code;
}

?>