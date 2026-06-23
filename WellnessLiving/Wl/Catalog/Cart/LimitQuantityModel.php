<?php

namespace WellnessLiving\Wl\Catalog\Cart;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlSaleSid;

/**
 * Displays information about the quantity limit when a promotion (Purchase Option) is added to the cart.
 *
 * @method WlModelRequest get() Checks limit quantity and whether a promotion can be added to the cart.  Used in the checkout flow to prevent a client from purchasing more passes than the promotion allows. Returns the limit, how many the client has already bought, and how many are currently in the cart so the UI can display a clear message if the limit would be exceeded.
 */
class LimitQuantityModel extends WlModelAbstract
{
  /**
   * The cart items list with the next structure: 
   *
   * <dl>
   *   <dt>int `i_quantity`</dt>
   *   <dd>The quantity of sale items.</dd>
   * 
   *   <dt>int `id_sale`</dt>
   *   <dd>The sale item type. One of the {@link WlSaleSid} constants.</dd>
   * 
   *   <dt>string `k_id`</dt>
   *   <dd>The sale item ID.</dd>
   * 
   *   <dt>string `k_shop_product_option`</dt>
   *   <dd>The shop product option. <tt>null</tt> if the sale item has no options.</dd>
   * </dl>
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
  public $i_purchase_already = null;

  /**
   * The current quantity of a promotion with the quantity limit in the cart.
   *
   * This will be `null` if not set yet, there's no limit quantity, or the limit quantity isn't exceeded.
   *
   * @get result
   * @var int|null
   */
  public $i_purchase_current = null;

  /**
   * The quantity limit of the promotion.
   *
   * This will be `null` if not set yet or if there's no limit quantity.
   *
   * @get result
   * @var int|null
   */
  public $i_quantity_limit = null;

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
  public $is_limit_exceeded = null;

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