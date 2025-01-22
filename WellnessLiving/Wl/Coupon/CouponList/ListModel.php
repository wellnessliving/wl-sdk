<?php

namespace WellnessLiving\Wl\Coupon\CouponList;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Coupon\WlTypeSid;

/**
 * Retrieves a list of gift cards.
 */
class ListModel extends WlModelAbstract
{
  /**
   * A list of gift cards. Every element has the following keys:
   * <dl>
   *   <dt>
   *     int <var>id_type</var>
   *   </dt>
   *   <dd>
   *     The type of coupon. One of {@link WlTypeSid} constants.
   *   </dd>
   *   <dt>
   *     string <var>k_coupon</var>
   *   </dt>
   *   <dd>
   *     The gift card key.
   *   </dd>
   *   <dt>
   *     string <var>text_title</var>
   *   </dt>
   *   <dd>
   *     The title of the gift card.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_coupon;

  /**
   * Class table ID.
   *
   * @get result
   * @var int
   */
  public $id_table;

  /**
   * Whether to return franchisee-created coupons (if business is franchisor).
   * <tt>true</tt> to include franchisee-created coupons.
   *
   * @get get
   * @var bool
   */
  public $is_franchise = false;

  /**
   * `true` to get only gift cards available for current user; `false` to get all gift cards.
   *
   * @get get
   * @var bool
   */
  public $is_frontend = false;

  /**
   * A flag to include disabled items in the query result
   *
   * @get get
   * @var bool
   */
  public $is_inactive_include = false;

  /**
   * The business key to retrieve a list of all the gift cards in a business.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>