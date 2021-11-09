<?php

namespace WellnessLiving\Wl\Catalog\Cart;

use WellnessLiving\WlModelAbstract;

/**
 * Information about quantity limit when a promotion ia added to the cart.
 *
 * @augments Core_Spa_Model
 * @mixes Core_Spa_Model
 * @constructor
 */
class LimitQuantityModel extends WlModelAbstract
{
  /**
   * Cart items list with next structure: <dl>
   *   <dt>int <var>i_quantity</var></dt>
   *   <dd>Quantity of sale items.</dd>
   *   <dt>int <var>id_sale</var></dt>
   *   <dd>Sale item type, one of {@link \RsSaleSid}.</dd>
   *   <dt>string <var>k_id</var></dt>
   *   <dd>Sale item ID.</dd>
   *   <dt>string <var>k_shop_product_option</var></dt>
   *   <dd>Shop product option. <tt>null</tt> if sale item has no options.</dd>
   * </dl>
   *
   * @get get
   * @var array[]
   */
  public array $a_item = [];

  /**
   * Quantity if already purchased promotions by current user.
   *  `true` if exceeded, `false` - otherwise.
   *
   * @get result
   * @var int|null
   */
  public $i_purchase_already = null;
  /**
   * Current quantity of a promotion with limit quantity in the cart.
   *
   * @get result
   * @var int|null
   */
  public $i_purchase_current = null;
  /**
   * Quantity limit of a promotion.
   *
   * @get result
   * @var int
   */
  public $i_quantity_limit;

  /**
   * Whether limit quantity is exceeded.
   *  `true` if exceeded, `false` - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_limit_exceeded;

  /**
   * Business in which the purchase is made.
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
   * UID of a user.
   *
   * @get get
   * @var string
   * @see \PassportLoginSql
   */
  public $uid = '0';
}

?>