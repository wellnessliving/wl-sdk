<?php

namespace WellnessLiving\Wl\Catalog\Cart;

use WellnessLiving\WlModelAbstract;

/**
 * Information about the quantity limit when a promotion is added to the cart.
 *
 * @augments Core_Spa_Model
 * @mixes Core_Spa_Model
 * @constructor
 */
class LimitQuantityModel extends WlModelAbstract
{
  /**
   * The cart items list with the next structure: <dl>
   *   <dt>int <var>i_quantity</var></dt>
   *   <dd>The quantity of sale items.</dd>
   *   <dt>int <var>id_sale</var></dt>
   *   <dd>The sale item type, one of {@link \RsSaleSid}.</dd>
   *   <dt>string <var>k_id</var></dt>
   *   <dd>The sale item ID.</dd>
   *   <dt>string <var>k_shop_product_option</var></dt>
   *   <dd>The shop product option. <tt>null</tt> if sale item has no options.</dd>
   * </dl>
   *
   * @get get
   * @var array[]
   */
  public $a_item = [];

  /**
   * The quantity if promotions have already been purchased by the current user.
   *  `true` if exceeded, `false` - otherwise.
   *
   * @get result
   * @var int|null
   */
  public $i_purchase_already = null;
  /**
   * The current quantity of a promotion with the quantity limit in the cart.
   *
   * @get result
   * @var int|null
   */
  public $i_purchase_current = null;
  /**
   * The quantity limit of a promotion.
   *
   * @get result
   * @var int
   */
  public $i_quantity_limit;

  /**
   * Determines whether the limit quantity has been exceeded.
   *  `true` if exceeded, `false` - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_limit_exceeded;

  /**
   * The business in which the purchase is made.
   *
   * @get get
   * @var string
   * @see \RsBusinessSql
   */
  public $k_business = '0';

  /**
   * A promotion key to add to cart.
   *
   * @get get
   * @var string
   * @see \RsPromotionSql
   */
  public $k_promotion_select = '0';

  /**
   * The user ID.
   *
   * @get get
   * @var string
   * @see \PassportLoginSql
   */
  public $uid = '0';
}

?>