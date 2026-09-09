<?php

namespace WellnessLiving\Wl\Catalog\StaffApp\CatalogCart;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlSaleSid;

/**
 * Calculates price data for a sale item.
 *
 * Note that the terms "promotion" and "Purchase Option" refer to the same thing.
 *
 * @method WlModelRequest get() Calculates amount of cart.  Used in the staff app checkout flow to show a live price summary before the staff member processes a client's payment. Returns the full breakdown so the staff member can confirm the total with the client before charging.
 */
class CatalogCartModel extends WlModelAbstract
{
  /**
   * A list of available discount codes with the next structure:
   *
   * <dl>
   *   <dt>bool `is_select`</dt>
   *   <dd>`true` if this code is selected currently, `false` otherwise.</dd>
   * 
   *   <dt>string `k_discount_code`</dt>
   *   <dd>Discount code key. </dd>
   * 
   *   <dt>string `text_discount_code`</dt>
   *   <dd>Value of the code that can be used to get discount.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Name of the code.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_discount_code = [];

  /**
   * The list of cart items with the next structure:
   *
   * <dl>
   *   <dt>array `a_config`</dt>
   *   <dd>
   *     The list of purchase item additional options:
   *     <dl>
   *       <dt>array `a_event_list`</dt>
   *       <dd>
   *         List of tuition events for tuition participant. Each record has the next structure:
   *         <dl>
   *           <dt>array `a_discount`</dt>
   *           <dd>
   *             Discount applied to the event price:
   *             <dl>
   *               <dt>string `m_discount`</dt>
   *               <dd>Discount amount.</dd>
   * 
   *               <dt>string `text_discount`</dt>
   *               <dd>Discount title.</dd>
   *             </dl>
   *           </dd>
   * 
   *           <dt>string `k_class`</dt>
   *           <dd>Key of the event class within the tuition which should be granted to the client.</dd>
   * 
   *           <dt>string `m_checkout`</dt>
   *           <dd>
   *             The amount that will be charged for this event when the tuition is purchased.
   *      Calculated based on the payment schedule (full amount or the prorated part due now).
   *      Can be overridden manually. If not specified or `null`, the amount will be calculated
   *      automatically.
   *           </dd>
   * 
   *           <dt>string `m_price`</dt>
   *           <dd>
   *             Price of the event for the tuition participant.
   *      If not specified or `null`, price will be calculated based on the class setup.
   *           </dd>
   * 
   *           <dt>string `uid`</dt>
   *           <dd>Key of the tuition participant.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>array `a_registration_fee_list`</dt>
   *       <dd>
   *         Registration fees for tuition participants.
   *   Keys are participant keys. 
   *   Each value has the next structure:
   *         <dl>
   *           <dt>array `a_discount`</dt>
   *           <dd>
   *             Manual discount applied to the registration fee:
   *             <dl>
   *               <dt>string `m_discount`</dt>
   *               <dd>Discount amount.</dd>
   * 
   *               <dt>string `text_discount`</dt>
   *               <dd>Discount title.</dd>
   *             </dl>
   *           </dd>
   * 
   *           <dt>string `m_amount`</dt>
   *           <dd>Registration fee amount for the tuition participant.</dd>
   * 
   *           <dt>string `m_discount`</dt>
   *           <dd>Total discount amount actually applied to the registration fee.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>string `m_checkout`</dt>
   *       <dd>The total amount that will be charged for the tuition item during purchase.</dd>
   * 
   *       <dt>string `m_deferred`</dt>
   *       <dd>
   *         The part of the tuition cost that is not charged during purchase.
   *   
   *       </dd>
   * 
   *       <dt>string `f_price`</dt>
   *       <dd>The custom price.</dd>
   * 
   *       <dt>string `dt_prorate`</dt>
   *       <dd>The prorate date. This should be passed when `is_prorate`=`true`.</dd>
   * 
   *       <dt>string `dt_start`</dt>
   *       <dd>The promotion start date.</dd>
   * 
   *       <dt>bool `is_prorate`</dt>
   *       <dd>Determines whether to prorate the first payment.</dd>
   * 
   *       <dt>bool `is_prorate_fix`</dt>
   *       <dd>Determines if the client should pay for the first period now.</dd>
   * 
   *       <dt>bool `is_prorate_only`</dt>
   *       <dd>Determines whether the selected option 'pay prorate amount only' should only include the prorate amount.</dd>
   * 
   *       <dt>string `m_custom`</dt>
   *       <dd>The custom price of the gift card.</dd>
   * 
   *       <dt>string `dt_send_local`</dt>
   *       <dd>The date when the gift card email must be sent.</dd>
   * 
   *       <dt>bool `is_mail`</dt>
   *       <dd>If `true`, the gift card will be sent via email. Otherwise, `false` if the gift card will be printed.</dd>
   * 
   *       <dt>string `s_mail`</dt>
   *       <dd>The recipient's email.</dd>
   * 
   *       <dt>string `s_message`</dt>
   *       <dd>The message.</dd>
   * 
   *       <dt>string `s_recipient`</dt>
   *       <dd>The recipient's name.</dd>
   * 
   *       <dt>string `s_sender`</dt>
   *       <dd>The sender's name.</dd>
   * 
   *       <dt>string `m_prorate_custom`</dt>
   *       <dd>The amount of money for the prorate period. This should only be passed in the case of manual entry.</dd>
   * 
   *       <dt>string `k_coupon`</dt>
   *       <dd>The coupon key.</dd>
   * 
   *       <dt>string `k_coupon_amount`</dt>
   *       <dd>The coupon amount key.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `a_tax_custom`</dt>
   *   <dd>
   *     Information about taxes. If not passed, no custom taxes have been applied to the sale item.
   * If a record is present, the tax is custom using the next structure:
   *     <dl>
   *       <dt>string `f_tax`</dt>
   *       <dd>The tax amount.</dd>
   * 
   *       <dt>string `k_tax`</dt>
   *       <dd>The tax keys. </dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>float `f_discount_percent`</dt>
   *   <dd>The discount percentage, applied to the current item.</dd>
   * 
   *   <dt>int `i_quantity`</dt>
   *   <dd>The quantity of sale items.</dd>
   * 
   *   <dt>int `id_sale`</dt>
   *   <dd>The sale item type. One of the {@link WlSaleSid} constants.</dd>
   * 
   *   <dt>string `k_id`</dt>
   *   <dd>The sale item key.</dd>
   * 
   *   <dt>string `k_shop_product_option`</dt>
   *   <dd>
   *     The store product option key. This will be `null` if the sale item has no options.
   * 
   *   </dd>
   * 
   *   <dt>string `m_discount_fix`</dt>
   *   <dd>The fixed price discount, applied to the current item.</dd>
   * 
   *   <dt>string `m_price_custom`</dt>
   *   <dd>The custom price of the sale item. If not passed, no custom price has been applied to the sale item.</dd>
   * </dl>
   * @get get,result
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
   * The amount that has to be charged right now for the cart.
   *
   * Equals {@link CatalogCartModel::$m_total} for everything that is paid for in full at once. A
   * tuition defers a part of its cost to an installment plan or to a membership schedule, and
   * `m_total` covers the full cost regardless, so this is the amount to put into the payment form.
   * It is `m_total` minus `a_config.m_deferred` of every tuition item in
   * {@link CatalogCartModel::$a_item}.
   *
   * @get result
   * @var string
   */
  public $m_checkout = '0.00';

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
   * The discount code's error code.
   *
   * `null` if no error.
   *
   * @get result
   * @var string|null
   */
  public $text_error_code = null;

  /**
   * The discount code's error message.
   *
   * `null` if no error.
   *
   * @get result
   * @var string|null
   */
  public $text_error_message = null;

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