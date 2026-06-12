<?php

namespace WellnessLiving\Wl\Catalog\Cart;

use WellnessLiving\WlModelAbstract;

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
   * @get get,result
   * @var array[]
   */
  public $a_item = [];

  /**
   * List of prizes that can be redeemed and applied to items in the cart.
   *
   * @get result
   * @var array[]
   */
  public $a_prize_propose = [];

  /**
   * List of cart items to which the selected prize can be applied
   *
   * @get result
   * @var array[]
   */
  public $a_reward_item = [];

  /**
   * List of login prizes that can be applied to items in the cart.
   *
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