<?php

namespace WellnessLiving\Wl\Coupon\CouponList;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list of gift cards.
 */
class ListModel extends WlModelAbstract
{
  /**
   * List of gift cards. Every element has the following keys:
   * <dl>
   *   <dt>
   *     int <var>id_type</var>
   *   </dt>
   *   <dd>
   *     Type of coupon. One of {@link WlTypeSid} constants.
   *   </dd>
   *   <dt>
   *     string <var>k_coupon</var>
   *   </dt>
   *   <dd>
   *     A Gift card key.
   *   </dd>
   *   <dt>
   *     string <var>text_title</var>
   *   </dt>
   *   <dd>
   *     Title of a gift card.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_coupon = [];

  /**
   * Business key to retrieve list of all gift cards in a business.
   *
   * @get get
   * @var string
   */
  public $k_business;
}

?>