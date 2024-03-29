<?php

namespace WellnessLiving\Wl\Catalog\StaffApp\CatalogCart;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\WlSaleSid;

/**
 * An endpoint that calculates price data for a sale item.
 *
 * Note that the terms "promotion" and "Purchase Option" refer to the same thing.
 */
class CatalogCartModel extends WlModelAbstract
{
  /**
   * A list of available discount codes with the next structure:
   * <dl>
   *   <dt>bool <var>is_select</var></dt>
   *   <dd>`true` if this code is selected currently, `false` otherwise.</dd>
   *   <dt>string <var>k_discount_code</var></dt>
   *   <dd>Discount code key.</dd>
   *   <dt>string <var>text_discount_code</var></dt>
   *   <dd>Value of the code that can be used to get discount.</dd>
   *   <dt>string <var>text_title</var></dt>
   *   <dd>Name of the code.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_discount_code = [];

  /**
   * The list of cart items with the next structure:
   * <dl>
   *   <dt>array [<var>a_config</var>]</dt>
   *   <dd>
   *     The list of purchase item additional options:
   *     <dl>
   *       <dt>string [<var>f_price</var>]</dt>
   *       <dd>The custom price.</dd>
   *       <dt>string [<var>dt_prorate</var>]</dt>
   *       <dd>The prorate date. This should be passed when <var>is_prorate</var>=<tt>true</tt>.</dd>
   *       <dt>string [<var>dt_start</var>]</dt>
   *       <dd>The promotion start date.</dd>
   *       <dt>bool [<var>is_prorate</var>]</dt>
   *       <dd>Determines whether to prorate the first payment.</dd>
   *       <dt>bool [<var>is_prorate_fix</var>]</dt>
   *       <dd>Determines if the client should pay for the first period now.</dd>
   *       <dt>bool [<var>is_prorate_only</var>]</dt>
   *       <dd>Determines whether the selected option 'pay prorate amount only' should only include the prorate amount.</dd>
   *       <dt>string [<var>m_custom</var>]</dt>
   *       <dd>The custom price of the gift card.</dd>
   *       <dt>string [<var>dt_send_local</var>]</dt>
   *       <dd>The date when the gift card email must be sent.</dd>
   *       <dt>bool <var>is_mail</var></dt>
   *       <dd>If <tt>true</tt>, the gift card will be sent via email. Otherwise, <tt>false</tt> if the gift card will be printed.</dd>
   *       <dt>string [<var>s_mail</var>]</dt>
   *       <dd>The recipient's email.</dd>
   *       <dt>string [<var>s_message</var>]</dt>
   *       <dd>The message.</dd>
   *       <dt>string <var>s_recipient</var></dt>
   *       <dd>The recipient's name.</dd>
   *       <dt>string <var>s_sender</var></dt>
   *       <dd>The sender's name.</dd>
   *       <dt>string <var>m_prorate_custom</var></dt>
   *       <dd>The amount of money for the prorate period. This should only be passed in the case of manual entry.</dd>
   *       <dt>string <var>k_coupon</var></dt>
   *       <dd>The coupon key.</dd>
   *       <dt>string <var>k_coupon_amount</var></dt>
   *       <dd>The coupon amount key.</dd>
   *     </dl>
   *   </dd>
   *   <dt>array [<var>a_tax_custom</var>]</dt>
   *   <dd>
   *     Information about taxes. If not passed, no custom taxes have been applied to the sale item.
   *     If a record is present, the tax is custom using the next structure:
   *     <dl>
   *       <dt>string <var>f_tax</var></dt>
   *       <dd>The tax amount.</dd>
   *       <dt>string <var>k_tax</var></dt>
   *       <dd>The tax keys.</dd>
   *     </dl>
   *   </dd>
   *   <dt>int [<var>f_discount_percent</var>]</dt>
   *   <dd>The discount percentage, applied to the current item.</dd>
   *   <dt>int <var>i_quantity</var></dt>
   *   <dd>The quantity of sale items.</dd>
   *   <dt>int <var>id_sale</var></dt>
   *   <dd>The sale item type. One of the {@link WlSaleSid} constants.</dd>
   *   <dt>string <var>k_id</var></dt>
   *   <dd>The sale item key.</dd>
   *   <dt>string <var>k_shop_product_option</var></dt>
   *   <dd>
   *     The store product option key. This will be <tt>null</tt> if the sale item has no options.
   *
   *   </dd>
   *   <dt>string [<var>m_discount_fix</var>]</dt>
   *   <dd>The fixed price discount, applied to the current item.</dd>
   *   <dt>string [<var>m_price_custom</var>]</dt>
   *   <dd>The custom price of the sale item. If not passed, no custom price has been applied to the sale item.</dd>
   * </dl>
   *
   * @get get
   * @var array[]
   */
  public $a_item = [];

  /**
   * The discount as a percentage.
   *
   * @get get
   * @var float
   */
  public $f_discount_percent = 0;

  /**
   * If `true`, every item is checked at the cart. Otherwise, this will be `false`.
   *
   * @get get
   * @var bool
   */
  public $is_check_cart_item = false;

  /**
   * Determines whether the business applied a commission at checkout.
   *
   * @get result
   * @var bool
   */
  public $is_commission = false;

  /**
   * Determines, how staff sees discount codes in Store.
   * `true` as select field, `false` as input field.
   *
   * @get result
   * @var bool
   */
  public $is_discount_code_mode_select = false;

  /**
   * Determines whether to display custom receipt notes at checkout.
   *
   * @get result
   * @var bool
   */
  public $is_receipt_note = false;

  /**
   * The business key.
   *
   * This field isn't used directly, but described for correct JavaScript auto-generation.
   *
   * @get get
   * @var string
   */
  public $k_business;

  /**
   * The business location key.
   *
   * @get get
   * @var string
   */
  public $k_location = '';

  /**
   * The discount amount in dollars, excluding tax.
   *
   * @get result
   * @var string
   */
  public $m_discount;

  /**
   * The manual discount amount in dollars, excluding tax.
   * Staff members can set this amount when making a sale.
   *
   * @get get
   * @var string
   */
  public $m_discount_flat = '';

  /**
   * The discount amount applied to the cart's total amount, including taxes.
   *
   * @get result
   * @var string
   */
  public $m_discount_total;

  /**
   * The subtotal amount.
   *
   * @get result
   * @var string
   */
  public $m_subtotal;

  /**
   * The amount of tax.
   *
   * @get result
   * @var string
   */
  public $m_tax;

  /**
   * The amount of tips.
   *
   * @get get
   * @var string
   */
  public $m_tip = '';

  /**
   * The amount of appointment tips.
   *
   * @get result
   * @var string
   */
  public $m_tip_purchase;

  /**
   * The cart's total amount.
   *
   * @get result
   * @var string
   */
  public $m_total;

  /**
   * The discount code.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $text_discount_code = null;

  /**
   * The discount code's error message.
   *
   * @get result
   * @var string
   */
  public $text_error_code;

  /**
   * The custom receipt note's text.
   *
   * @get result
   * @var string
   */
  public $text_receipt_note = '';

  /**
   * The key of the current user.
   *
   * @get get
   * @var string
   */
  public $uid_current;

  /**
   * The key of the user who performed the purchase.
   *
   * @get get
   * @var string
   */
  public $uid_customer = '';
}

?>