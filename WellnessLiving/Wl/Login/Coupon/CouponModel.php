<?php

namespace WellnessLiving\Wl\Login\Coupon;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about gift card.
 */
class CouponModel extends WlModelAbstract
{
  /**
   * Code of the coupon.
   *
   * @get get
   * @var string
   */
  public $s_code;

  /**
   * Business key. Primary key in {@link \RsBusinessSql} table.
   *
   * @get get
   * @var string
   */
  public $k_business;

  /**
   * Login coupon key.
   *
   * @get result
   * @var string
   */
  public $k_login_coupon;

  /**
   * Amount of gift card.
   *
   * @var string
   */
  public $m_amount;
}

?>