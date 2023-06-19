<?php

namespace WellnessLiving\Wl\Catalog\Cart;

use WellnessLiving\WlModelAbstract;

/**
 * Information about the cart in the catalog.
 */
class CartModel extends WlModelAbstract
{
  /**
   * List of discount for each item.
   *
   * Key is unique key of item.
   * Value is discount amount for this item.
   *
   * @get result
   * @var string[]
   */
  public $a_discount_item = [];

  /**
   * A list of items in the cart.
   * <dl>
   *   <dt>int <var>i_quantity</var></dt>
   *   <dd>Quantity of sale items.</dd>
   *   <dt>int <var>id_sale</var></dt>
   *   <dd>Sale item type, one of {@link \WellnessLiving\WlSaleSid}.</dd>
   *   <dt>string <var>k_id</var></dt>
   *   <dd>Sale item key.</dd>
   *   <dt>string <var>k_shop_product_option</var></dt>
   *   <dd>Shop product option. <tt>null</tt> if sale item has no options.</dd>
   * </dl>
   *
   * @get get
   * @var array[]
   */
  public $a_item = [];

  /**
   * Values derived for individual tax rates.
   * Key is key of the tax (primary key in {@link \RsTaxSql}).
   * Value is the amount of tax in cart.
   *
   * @get result
   * @var array
   */
  public $a_tax_list = [];

  /**
   * The location key.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * The full discount of the cart.
   *
   * <tt>null</tt> if not calculated yet.
   *
   * @get result
   * @var string|null
   */
  public $m_discount;

  /**
   * Amount of total discount.
   *
   * @get result
   * @var string
   */
  public $m_discount_total;

  /**
   * The total amount in the catalog cart without tax.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $m_subtotal;

  /**
   * The amount of tax.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $m_tax;

  /**
   * Amount of appointment tips.
   *
   * @get result
   * @var string|null
   */
  public $m_tip_purchase;

  /**
   * The total amount in the catalog cart.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $m_total;

  /**
   * The discount code.
   *
   * <tt>null</tt> means that the discount code has been reset.
   *
   * @get get
   * @var string|null
   */
  public $text_discount_code = '';

  /**
   * The user key.
   *
   * `0` in case when guest.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>