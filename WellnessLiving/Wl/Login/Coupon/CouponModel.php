<?php

namespace WellnessLiving\Wl\Login\Coupon;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about a gift card (also referred to as the coupon code).
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