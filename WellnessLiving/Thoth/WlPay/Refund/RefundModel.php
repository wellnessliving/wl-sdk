<?php

namespace WellnessLiving\Thoth\WlPay\Refund;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;
use WellnessLiving\Wl\WlPayMethodSid;

/**
 * Refund functionality.
 *
 * @method WlModelRequest get() Returns form data for a page to perform refund operation.
 * @method WlModelRequest post() Processes refund operation.
 */
class RefundModel extends WlModelAbstract
{
  /**
   * Key is the transaction key.
   *
   * `null` in case when not initialized yet.
   *
   * @post post
   * @var array|null
   */
  public $a_pay_refund_method = null;

  /**
   * List of payments transactions in this purchase, where each item is an array: 
   * `null` in case when not initialized yet.
   *
   * <dl>
   *   <dt>array `a_pay_refund_method`</dt>
   *   <dd>
   *     A drop-down list data to select a refund method.
   *   </dd>
   * 
   *   <dt>bool `can_refund`</dt>
   *   <dd>`true` when payment transaction can be refunded.</dd>
   * 
   *   <dt>int `id_pay_method`</dt>
   *   <dd>Payment method. One of {@link WlPayMethodSid} constants.</dd>
   * 
   *   <dt>bool `is_wait`</dt>
   *   <dd>`true` when we are waiting when financial institution (e.g. bank) will process our transaction.</dd>
   * 
   *   <dt>string `f_amount_refunded`</dt>
   *   <dd>Amount of returned funds.</dd>
   * 
   *   <dt>string `f_amount_rest`</dt>
   *   <dd>Amount of the transaction after application of all refunds.</dd>
   * 
   *   <dt>string `k_pay_transaction`</dt>
   *   <dd>Transaction key.</dd>
   * 
   *   <dt>string `text_card`</dt>
   *   <dd>Part of account number (Credit Card, bank account).</dd>
   * 
   *   <dt>string `text_info`</dt>
   *   <dd>Additional information attached to the transaction.</dd>
   * 
   *   <dt>string `text_pay_exception`</dt>
   *   <dd>Transaction exception source for a translated message</dd>
   * 
   *   <dt>string `text_pay_method`</dt>
   *   <dd>Payment method title.</dd>
   * 
   *   <dt>string `text_pay_transaction_status`</dt>
   *   <dd>Transaction status title.</dd>
   * 
   *   <dt>string `text_amount_refunded`</dt>
   *   <dd>Formatted amount of returned funds.</dd>
   * 
   *   <dt>string `text_amount_rest`</dt>
   *   <dd>Formatted amount of the transaction after application of all refunds.</dd>
   * 
   *   <dt>string `text_amount_start`</dt>
   *   <dd>Formatted amount of the transaction.</dd>
   * 
   *   <dt>string `sid_pay_transaction_status`</dt>
   *   <dd>Transaction status string identifier.</dd>
   * 
   *   <dt>string `url_transaction_detail`</dt>
   *   <dd>Transaction details page URL.</dd>
   * </dl>
   * @get result
   * @var array|null
   */
  public $a_pay_transaction = null;

  /**
   * List or purchased items, where each item is an array: 
   *
   * <dl>
   *   <dt>array `a_tax`</dt>
   *   <dd>
   *     Array of applied taxes. Each item is an array:
   *     <dl>
   *       <dt>string `f_pay_tax_refund`</dt>
   *       <dd>Tax refund amount.</dd>
   * 
   *       <dt>string `html_tax`</dt>
   *       <dd>Formatted tax amount.</dd>
   * 
   *       <dt>string `html_tax_refund`</dt>
   *       <dd>Formatted tax refund amount.</dd>
   * 
   *       <dt>string `html_title`</dt>
   *       <dd>Tax name.</dd>
   * 
   *       <dt>string `k_tax`</dt>
   *       <dd>Tax key.</dd>
   * 
   *       <dt>string `k_purchase_item`</dt>
   *       <dd>Purchase item key.</dd>
   * 
   *       <dt>string `m_tax`</dt>
   *       <dd>Amount of tax for all units of a purchase item, after application discount.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>bool `can_change_count`</dt>
   *   <dd>`true` when quantity is 1 and can not be adjusted for refund.</dd>
   * 
   *   <dt>string `f_pay_price_refund`</dt>
   *   <dd>Purchase item price without taxes to refund.</dd>
   * 
   *   <dt>string `html_date_suspend_pay`</dt>
   *   <dd>Deferred payment date or <tt>null</tt> if the payment task has already been completed or never existed.</dd>
   * 
   *   <dt>string `html_price`</dt>
   *   <dd>Formatted purchase item price without taxes.</dd>
   * 
   *   <dt>string `html_price_refund`</dt>
   *   <dd>Formatted purchase item price without taxes to refund.</dd>
   * 
   *   <dt>string `html_suspend_pay`</dt>
   *   <dd>Deferred payment amount or <tt>null</tt> if the payment task has already been completed or never existed.</dd>
   * 
   *   <dt>string `html_title`</dt>
   *   <dd>Purchased item title.</dd>
   * 
   *   <dt>string `html_total`</dt>
   *   <dd>Purchased item total amount.</dd>
   * 
   *   <dt>int `i_count`</dt>
   *   <dd>Number of items initially bought.</dd>
   * 
   *   <dt>int `i_buy`</dt>
   *   <dd>Number of items that is not cancelled yet.</dd>
   * 
   *   <dt>int `id_purchase_item`</dt>
   *   <dd>ID of the purchased item. One of {@link WlPurchaseItemSid} constants.</dd>
   * 
   *   <dt>bool `is_refund_full`</dt>
   *   <dd>`true` when a purchase item is completely refunded.</dd>
   * 
   *   <dt>bool `is_refund_partial`</dt>
   *   <dd>`true` when a purchase item is partially refunded.</dd>
   * 
   *   <dt>string `k_purchase_item`</dt>
   *   <dd>Purchase item key.
   * `0` if the item is tips.</dd>
   * 
   *   <dt>string `m_price`</dt>
   *   <dd>Purchase item price without taxes.</dd>
   * 
   *   <dt>bool `show_deactivate`</dt>
   *   <dd>`true` when PO can be deactivated.</dd>
   * 
   *   <dt>bool `show_reflect_schedule`</dt>
   *   <dd>`true` when it can be reflected in payment schedule</dd>
   * 
   *   <dt>string `url_edit`</dt>
   *   <dd>URL to page when purchase item can be edited.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_purchase_item = [];

  /**
   * Key is the transaction key.
   * Value is an amount to refund.
   *
   * `null` in case when not initialized yet.
   *
   * @post post
   * @var array|null
   */
  public $a_refund = null;

  /**
   * Purchase items data to refund.
   * Key is the purchase item key.
   * Note!
   *   Key "0" corresponds to the refund of the tips.
   *   Key "-1" corresponds to the refund of the surcharges.
   *   Key "-2" corresponds to the refund of the penalty fee.
   *   Key "-3" corresponds to the refund of the credit card surcharges.
   *   Key "-4" corresponds to the refund of the ach surcharges.
   * Value of each element has next structure: 
   *
   * `null` in case when not initialized yet.
   *
   * <dl>
   *   <dt>string `m_price`</dt>
   *   <dd>Refund amount.</dd>
   * 
   *   <dt>array `a_tax`</dt>
   *   <dd>
   *     Refunds for each tax of item.
   * Key is tax key.
   * Value is a tax refund amount.
   *   </dd>
   * </dl>
   * @post post
   * @var array|null
   */
  public $a_refund_item = null;

  /**
   * List of applied taxes, where each element is an array: 
   *
   * <dl>
   *   <dt>string `html_title`</dt>
   *   <dd>Tax name.</dd>
   * 
   *   <dt>string `k_tax`</dt>
   *   <dd>Tax key.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_tax = [];

  /**
   * `true` if there are any purchase item where is possible to refund specific quantity.
   *
   * @get result
   * @var bool
   */
  public $can_change_count = false;

  /**
   * Whether transaction in a specified status can be refunded.
   *
   * @get result
   * @var bool
   */
  public $can_refund = false;

  /**
   * Whether transaction has an installment payment.
   *
   * @get result
   * @var bool
   */
  public $has_installment = false;

  /**
   * Whether transaction has a surcharge applied.
   *
   * @get result
   * @var bool
   */
  public $has_surcharge = false;

  /**
   * Payment owner name for this purchase.
   *
   * `null` if payment owner and purchase owner are the same or in case when not initialized yet.
   *
   * @get result
   * @var string|null
   */
  public $html_pay_owner_money = null;

  /**
   * Purchase owner name.
   *
   * `null` in case when not initialized yet.
   *
   * @get result
   * @var string|null
   */
  public $html_pay_owner_purchase = null;

  /**
   * Total purchase amount.
   *
   * `null` in case when not initialized yet.
   *
   * @get result
   * @var string|null
   */
  public $html_purchase_total = null;

  /**
   * Total surcharge amount.
   *
   * `null` in case when not initialized yet.
   *
   * @get result
   * @var string|null
   */
  public $html_surcharge_total = null;

  /**
   * Total purchase quantity.
   *
   * @get result
   * @var int
   */
  public $i_quantity_total = 0;

  /**
   * Whether refund is allowed for this transaction.
   *
   * @get result
   * @var bool
   */
  public $is_allowed_refund = false;

  /**
   * `true` if need to refund a free purchase without any transactions, `false` if purchase has transactions.
   *
   * If it is a free purchase without any transaction, then we will not proceed the money refunds.
   * For example, it may be used to return the inventory that was obtained through the free purchases.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $is_free = false;

  /**
   * 'true' if enable mail `Purchase Refunded`, otherwise `false`.
   *
   * @get result
   * @var bool
   */
  public $is_mail_refund = false;

  /**
   * 'true' if need send `Purchase Refunded` mail, otherwise `false`.
   *
   * @post get
   * @var bool
   */
  public $is_mail_refund_send = false;

  /**
   * `true` if transaction should be voided, `false` if transaction should be refunded.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $is_void = false;

  /**
   * Business where to process purchase refund.
   *
   * `null` in case when not initialized yet.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Currency key of purchase.
   *
   * `null` in case when not initialized yet.
   *
   * @get result
   * @var string|null
   */
  public $k_currency = null;

  /**
   * Purchase key.
   *
   * `null` in case when not initialized yet.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $k_purchase = null;

  /**
   * Show action column.
   *
   * @get result
   * @var bool
   */
  public $show_action_column = false;

  /**
   * Defines whether to show table column with links to transaction details.
   *
   * @get result
   * @var bool
   */
  public $show_transaction_details = false;

  /**
   * Currency sing of purchase.
   * `null` in case when not initialized yet.
   *
   * @get result
   * @var string|null
   */
  public $text_currency = null;

  /**
   * Purchase comments.
   * `null` in case when not initialized yet.
   *
   * @get result
   * @post post
   * @var string|null
   */
  public $text_note = null;

  /**
   * URL to purchase edit page.
   *
   * `null` in case when not initialized yet.
   *
   * @get result
   * @var string|null
   */
  public $url_purchase = null;
}

?>