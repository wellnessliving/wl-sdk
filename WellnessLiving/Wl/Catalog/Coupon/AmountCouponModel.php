<?php

namespace WellnessLiving\Wl\Catalog\Coupon;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API for buying amount coupon gifts.
 *
 * @method WlModelRequest post() Adds new amount coupon gift card. Note, that only one card of {@link \Wl\Coupon\TypeSid::AMOUNT} can be created in one business.
 */
class AmountCouponModel extends WlModelAbstract
{
  /**
   * Amount coupon information.
   *
   * @post result
   * @var array|null
   */
  public $a_cart_coupon;

  /**
   * From where request comes.
   *
   * @post get
   * @var int
   */
  public $id_place = 1;

  /**
   * Business key.
   *
   * @post post
   * @var string
   */
  public $k_business;

  /**
   * Coupon key.
   *
   * @post post
   * @var string
   */
  public $k_coupon;
}

?>