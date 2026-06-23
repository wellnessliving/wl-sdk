<?php

namespace WellnessLiving\Wl\Catalog\Cart;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\WlSaleSid;

/**
 * Displays information about the cart in the catalog.
 */
class CartModel extends WlModelAbstract
{
  /**
   * The list of discounts for each item.
   *
   * Keys refer to unique item keys, and values refer to discount amounts for the item.
   *
   * @get result
   * @var string[]
   */
  public $a_discount_item = [];

  /**
   * The list of items in the cart.
   *
   * <dl>
   *   <dt>string `dl_client_prorate`</dt>
   *   <dd>The client prorate date. This will be `null` in cases where the client prorate date hasn't passed.</dd>
   * 
   *   <dt>int `i_quantity`</dt>
   *   <dd>The quantity of sale items.</dd>
   * 
   *   <dt>int `id_sale`</dt>
   *   <dd>The sale item type, one of the {@link WlSaleSid} constants.</dd>
   * 
   *   <dt>string `k_id`</dt>
   *   <dd>
   *     The sale item key.
   *   Note:
   *      
   *      You need to specify the product option key in the `k_shop_product_option` field or the first available
   *          option will be used automatically.
   *   </dd>
   * 
   *   <dt>?string `k_login_prize`</dt>
   *   <dd>Key of login prize used on item. </dd>
   * 
   *   <dt>string `k_shop_product_option`</dt>
   *   <dd>
   *     
   *   Note:
   *      Used for products only `id_sale` = {@link WlSaleSid::PRODUCT}.
   *      If empty the first available option will be used automatically.
   *   </dd>
   * </dl>
   * @get get,result
   * @var array[]
   */
  public $a_item = [];

  /**
   * List of prizes that can be redeemed and applied to items in the cart.
   *
   * <dl>
   *   <dt>int `i_score`</dt>
   *   <dd>Amount of points needed to redeem the prize.</dd>
   * 
   *   <dt>string `k_reward_prize`</dt>
   *   <dd>Reward prize key. </dd>
   * 
   *   <dt>string `text_discount`</dt>
   *   <dd>Reward prize discount, e.g. '.00 off', '10% off'.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>
   *     Reward prize title, e.g. 'on any item', 'on Water bottle', 'on any Appointment Pass or Membership Purchase Option'.
   *   </dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_prize_propose = [];

  /**
   * List of cart items to which the selected prize can be applied
   *
   * <dl>
   *   <dt>int `i_quantity`</dt>
   *   <dd>The quantity of sale items.</dd>
   * 
   *   <dt>int `id_sale`</dt>
   *   <dd>The sale item type, one of the {@link WlSaleSid} constants.</dd>
   * 
   *   <dt>bool `is_login_prize_used`</dt>
   *   <dd>Whether selected login prize discount applied to item.</dd>
   * 
   *   <dt>string `k_id`</dt>
   *   <dd>The sale item key.</dd>
   * 
   *   <dt>string `k_shop_product_option`</dt>
   *   <dd>The shop product option. If <tt>null</tt>, the sale item has no options.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_reward_item = [];

  /**
   * List of login prizes that can be applied to items in the cart.
   *
   * <dl>
   *   <dt>string `k_login_prize`</dt>
   *   <dd>Login prize key. </dd>
   * 
   *   <dt>string `text_discount`</dt>
   *   <dd>Reward prize discount, e.g. '.00 off', '10% off'.</dd>
   * 
   *   <dt>string `text_discount_applied`</dt>
   *   <dd>Applied login prize discount title, e.g. '10% discount'.</dd>
   * 
   *   <dt>string `text_discount_purpose`</dt>
   *   <dd>Purpose login prize discount title, e.g. 'Apply 10% off'.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>
   *     Reward prize title, e.g. 'on any item', 'on Water bottle', 'on any Appointment Pass or Membership Purchase Option'.
   *   </dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_reward_propose = [];

  /**
   * Values derived for individual tax rates.
   *
   * Keys refer to tax keys, values refer to the amount of tax in the cart.
   *
   * @get result
   * @var string[]
   */
  public $a_tax_list = [];

  /**
   * Amount of client's reward points.
   *
   * @get result
   * @var int|null
   */
  public $i_score;

  /**
   * Whether selected login prize should be auto applied to first applicable item.
   *
   * @get get
   * @var bool
   */
  public $is_auto_apply_prize = true;

  /**
   * The location key.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * The login prize key.
   *
   * @get get
   * @var string
   */
  public $k_login_prize = '0';

  /**
   * The full discount of the cart.
   *
   * If `null`, the discount isn't calculated yet.
   *
   * @get result
   * @var string|null
   */
  public $m_discount;

  /**
   * The total discount amount.
   *
   * @get result
   * @var string
   */
  public $m_discount_total;

  /**
   * The total amount in the catalog cart without tax.
   *
   * If `null`, the total amount isn't set yet.
   *
   * @get result
   * @var string|null
   */
  public $m_subtotal;

  /**
   * The tax amount.
   *
   * If `null`, the tax amount isn't set yet.
   *
   * @get result
   * @var string|null
   */
  public $m_tax;

  /**
   * The amount of appointment tips.
   *
   * @get result
   * @var string|null
   */
  public $m_tip_purchase;

  /**
   * The total amount in the catalog cart.
   *
   * If `null`, the total amount isn't set yet.
   *
   * @get result
   * @var string|null
   */
  public $m_total;

  /**
   * The discount code.
   *
   * If `null`, the discount code has been reset.
   *
   * @get get
   * @var string|null
   */
  public $text_discount_code = '';

  /**
   * The user key.
   *
   * This will be `0` for guests.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>