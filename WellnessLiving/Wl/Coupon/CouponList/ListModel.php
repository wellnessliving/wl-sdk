<?php

namespace WellnessLiving\Wl\Coupon\CouponList;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that retrieves a list of gift cards.
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
  public $a_coupon = [];

  /**
   * The business key to retrieve a list of all the gift cards in a business.
   *
   * @get get
   * @var string
   */
  public $k_business;
}

?>