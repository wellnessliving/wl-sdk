<?php

namespace WellnessLiving\Wl\Catalog\Cart;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that displays information about the quantity limit when a promotion (Purchase Option) is added to the cart.
 */
class LimitQuantityModel extends WlModelAbstract
{
  /**
   * The cart items list with the next structure: <dl>
   *   <dt>int <var>i_quantity</var></dt>
   *   <dd>The quantity of sale items.</dd>
   *   <dt>int <var>id_sale</var></dt>
   *   <dd>The sale item type. One of the {@link \WellnessLiving\WlSaleSid} constants.</dd>
   *   <dt>string <var>k_id</var></dt>
   *   <dd>The sale item ID.</dd>
   *   <dt>string <var>k_shop_product_option</var></dt>
   *   <dd>The shop product option. <tt>null</tt> if the sale item has no options.</dd>
   * </dl>
   *
   * @get get
   * @var array[]
   */
  public $a_item = [];

  /**
   * The quantity if promotions have already been purchased by the current user.
   *
   * If `true`, the quantity exceeded. Otherwise, this will be `false`.
   *
   * This will be `null` if not set yet, there's no limit quantity, or the limit quantity isn't exceeded.
   *
   * @get result
   * @var int|null
   */
  public $i_purchase_already;

  /**
   * The current quantity of a promotion with the quantity limit in the cart.
   *
   * This will be `null` if not set yet, there's no limit quantity, or the limit quantity isn't exceeded.
   *
   * @get result
   * @var int|null
   */
  public $i_purchase_current;

  /**
   * The quantity limit of the promotion.
   *
   * This will be `null` if not set yet or if there's no limit quantity.
   *
   * @get result
   * @var int|null
   */
  public $i_quantity_limit;

  /**
   * Determines whether the limit quantity has been exceeded.
   *
   * If `true`, the limit quantity has been exceeded. Otherwise, this will be `false`.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var bool|null
   */
  public $is_limit_exceeded;

  /**
   * The business in which the purchase will be made.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The promotion key to add to the cart.
   *
   * @get get
   * @var string
   */
  public $k_promotion = '0';

  /**
   * The user key.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>