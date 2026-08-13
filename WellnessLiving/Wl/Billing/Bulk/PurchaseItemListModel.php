<?php

namespace WellnessLiving\Wl\Billing\Bulk;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;
use WellnessLiving\Wl\WlPayMethodSid;
use WellnessLiving\Wl\WlProgramSid;
use WellnessLiving\Wl\WlProgramTypeSid;

/**
 * Lists the promotions and products available for bulk billing, and reviews a bulk billing before it is scheduled.
 *
 * Use the GET request to list the promotions and products of a business available at a location, with their prices.
 * Products are expanded into their options, each with its own price.
 *
 * Use the POST request to review a bulk billing: it returns the per-client totals, the clients that will be billed,
 *  and the clients excluded because a selected item is not available to them. The review also returns an id that is
 *  passed to {@link BulkBillingModel} to schedule the billing without sending the clients and items again.
 *
 * @method WlModelRequest get() Gets the list of promotions and products available at the location.  Validates access to the business, then loads promotions with their prices and products expanded into  their options, keeping only the items available at the requested location.
 * @method WlModelRequest post() Prepares the bulk billing review: the per-client totals and the list of clients that will be billed.  Validates access to the business, calculates the per-client subtotal, tax and total for the selected purchase  items, and collects each client contact data and payment method label. Clients that a selected item is not  available to (by their client type or member group) are removed from billing and returned in  {@link \Wl\Billing\Bulk\PurchaseItemListApi::$a_client_restrict}. Clients that are not eligible for the selected introductory  items are flagged with `is_warning` and described in {@link \Wl\Billing\Bulk\PurchaseItemListApi::$a_client_bill} (`a_warning`  key).
 */
class PurchaseItemListModel extends WlModelAbstract
{
  /**
   * The result of preparing the clients to bill. Has the following structure: 
   *
   * <dl>
   *   <dt>array[] `a_warning`</dt>
   *   <dd>
   *     The inventory and introductory-eligibility warnings produced while preparing the bill. Each
   * element has the following structure:
   *     <dl>
   *       <dt>string `text_message`</dt>
   *       <dd>The user-facing warning message.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array[] `a_client`</dt>
   *   <dd>
   *     The list of clients that will be billed. Each element has the following structure:
   *     <dl>
   *       <dt>int `id_pay_method`</dt>
   *       <dd>
   *         The payment method this client is charged with, which decides whether the client is surcharged and
   * which surcharge applies. One of the {@link WlPayMethodSid} constants:
   * {@link WlPayMethodSid::ECOMMERCE} for a stored card, {@link WlPayMethodSid::ACH} for a stored bank
   * account, and {@link WlPayMethodSid::ACCOUNT} when the client account is billed, which is never
   * surcharged.
   *       </dd>
   * 
   *       <dt>bool `is_warning`</dt>
   *       <dd>
   *         `true` if the client has no default payment method on file, has no email on file while a receipt is
   * to be sent, or is not eligible for at least one of the selected introductory items; `false`
   * otherwise.
   *       </dd>
   * 
   *       <dt>string `text_mail`</dt>
   *       <dd>The client email address. Empty string if the client has no email.</dd>
   * 
   *       <dt>string `text_name`</dt>
   *       <dd>The client full name.</dd>
   * 
   *       <dt>string `text_pay_method`</dt>
   *       <dd>
   *         The payment method label for this client. `Account` when billing to the client account; otherwise the
   * default stored card label (for example, `Visa ****1234`), the default ACH account label when no card
   * is on file, or an account fallback when neither is on file.
   *       </dd>
   * 
   *       <dt>string `text_phone`</dt>
   *       <dd>The client cell phone number. Empty string if the client has no cell phone.</dd>
   * 
   *       <dt>string `uid`</dt>
   *       <dd>The client user key. </dd>
   *     </dl>
   *   </dd>
   * </dl>
   * @post result
   * @var array
   */
  public $a_client_bill = [];

  /**
   * The clients removed from the bulk billing because a selected item is not available to their client type or
   *  member group, together with the warnings that explain why. Has the following structure: 
   *
   * <dl>
   *   <dt>array[] `a_client`</dt>
   *   <dd>
   *     The clients that fail at least one restriction. Each element has the following structure:
   *     <dl>
   *       <dt>string `text_login_type`</dt>
   *       <dd>The client login type title.</dd>
   * 
   *       <dt>string `text_mail`</dt>
   *       <dd>The client email address. Empty string if the client has no email.</dd>
   * 
   *       <dt>string `text_member_group`</dt>
   *       <dd>Comma-separated titles of the member groups the client belongs to.</dd>
   * 
   *       <dt>string `text_name`</dt>
   *       <dd>The client full name.</dd>
   * 
   *       <dt>string `uid`</dt>
   *       <dd>The client user key. </dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array[] `a_warning`</dt>
   *   <dd>
   *     One warning per restricted item that at least one client fails to satisfy. Each element has the
   * following structure:
   *     <dl>
   *       <dt>string `text_message`</dt>
   *       <dd>The user-facing warning message.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>bool `has_client_group_restrict`</dt>
   *   <dd>`true` if at least one client fails a member group restriction, `false` otherwise.</dd>
   * 
   *   <dt>bool `has_client_type_restrict`</dt>
   *   <dd>`true` if at least one client fails a login type restriction, `false` otherwise.</dd>
   * </dl>
   * @post result
   * @var array
   */
  public $a_client_restrict = [];

  /**
   * The list of products available at the location. Each element has the following structure: 
   *
   * <dl>
   *   <dt>array[] `a_option`</dt>
   *   <dd>
   *     The options of the product available at the location. Each element has the following structure:
   *     <dl>
   *       <dt>string `k_shop_product_option`</dt>
   *       <dd>The product option key. </dd>
   * 
   *       <dt>string `m_price`</dt>
   *       <dd>The regular price of the option.</dd>
   * 
   *       <dt>string `text_title`</dt>
   *       <dd>The product option title.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>bool `is_tax_free`</dt>
   *   <dd>`true` if no taxes should be applied to the product, `false` otherwise.</dd>
   * 
   *   <dt>string `k_shop_product`</dt>
   *   <dd>The product key. </dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>The product title.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_product = [];

  /**
   * The list of promotions available at the location. Each element has the following structure: 
   *
   * <dl>
   *   <dt>int `id_program`</dt>
   *   <dd>The promotion program. One of the {@link WlProgramSid} constants.</dd>
   * 
   *   <dt>int `id_program_type`</dt>
   *   <dd>The promotion program type. One of the {@link WlProgramTypeSid} constants.</dd>
   * 
   *   <dt>bool `is_tax_free`</dt>
   *   <dd>`true` if no taxes should be applied to the promotion, `false` otherwise.</dd>
   * 
   *   <dt>string `k_promotion`</dt>
   *   <dd>The promotion key. </dd>
   * 
   *   <dt>string `m_price`</dt>
   *   <dd>The promotion price, excluding taxes.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>The promotion title.</dd>
   * 
   *   <dt>string `text_payment_period`</dt>
   *   <dd>Payment period of the promotion.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_promotion = [];

  /**
   * The list of purchase items to bill. Each element is a string in the `{id_purchase_item}:{k_id}` format, where
   *  `id_purchase_item` is one of the {@link WlPurchaseItemSid} constants and `k_id` is the promotion key for
   *  {@link WlPurchaseItemSid::PROMOTION} or the product option key for {@link WlPurchaseItemSid::PRODUCT}.
   *
   * @post post
   * @var string[]
   */
  public $a_purchase_item = [];

  /**
   * The totals of the bulk billing: the price of the selected items for a single client, and what the whole batch
   *  adds up to once the client type discount of every client is applied. All amounts are money strings in the
   *  currency of the business. Has the following structure: 
   *
   * <dl>
   *   <dt>array[] `a_discount_list`</dt>
   *   <dd>
   *     One entry per client type that discounts at least one of the selected items for at least one of the
   * clients. Empty when no client type discount applies. Each element has the following structure:
   *     <dl>
   *       <dt>int `i_user`</dt>
   *       <dd>The number of clients that get this discount.</dd>
   * 
   *       <dt>string `k_login_type`</dt>
   *       <dd>The client type that gives the discount.
   * </dd>
   * 
   *       <dt>string `m_discount`</dt>
   *       <dd>The discount this client type gives, summed over all its clients and all the selected items.</dd>
   * 
   *       <dt>string `text_title`</dt>
   *       <dd>The client type title.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int `i_pay_account`</dt>
   *   <dd>The number of clients that paid by account.</dd>
   * 
   *   <dt>int `i_pay_card`</dt>
   *   <dd>The number of clients that paid by card or ACH.</dd>
   * 
   *   <dt>string `m_pay_account`</dt>
   *   <dd>The total amount paid by account.</dd>
   * 
   *   <dt>string `m_pay_card`</dt>
   *   <dd>The total amount paid by card or ACH.</dd>
   * 
   *   <dt>string `m_subtotal_after_discount`</dt>
   *   <dd>The price of the selected items for all the clients, with the client type discounts applied.</dd>
   * 
   *   <dt>string `m_subtotal_before_discount`</dt>
   *   <dd>The price of the selected items for all the clients, before any discount.</dd>
   * 
   *   <dt>string `m_subtotal_per_client`</dt>
   *   <dd>
   *     The price of the selected items for one client, before any discount. It is the same for every client,
   * because a discount depends on the client type.
   *   </dd>
   * 
   *   <dt>string `m_total_batch`</dt>
   *   <dd>
   *     The amount the whole batch charges, with the client type discounts applied, the taxes accounted and
   * surcharges added.
   *   </dd>
   * 
   *   <dt>string `m_total_surcharge`</dt>
   *   <dd>
   *     The surcharges of all the clients, each derived from the amount that single client is charged. Only the
   * clients whose payment method the business surcharges are counted in. Zero when the client accounts are
   * billed, or when neither `is_surcharge_ach` nor `is_surcharge_ecommerce` is requested.
   *   </dd>
   * 
   *   <dt>string `m_total_tax`</dt>
   *   <dd>The taxes of the selected items for all the clients. Zero when `is_tax` is `false`.</dd>
   * </dl>
   * @post result
   * @var array
   */
  public $a_total = [];

  /**
   * Whether to charge the client default payment method (`true`) or bill the client account (`false`).
   *
   * @post post
   * @var bool
   */
  public $is_payment_method_default = false;

  /**
   * Whether to send a receipt to the client email address after billing.
   *
   * @post post
   * @var bool
   */
  public $is_receipt_send = false;

  /**
   * Whether to apply the ACH surcharge.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_surcharge_ach = false;

  /**
   * Whether to apply the e-commerce surcharge.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_surcharge_ecommerce = false;

  /**
   * Whether to include the pre-configured taxes into the totals.
   *
   * @post post
   * @var bool
   */
  public $is_tax = false;

  /**
   * The business key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * The location key to filter available items by.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_location = '';

  /**
   * The review id that identifies this prepared bulk billing. Pass it to {@link BulkBillingModel} to schedule the
   *  billing without sending the clients and items again.
   *
   * @post result
   * @var string
   */
  public $s_id;

  /**
   * List of client user keys to bill joined with comma.
   *
   * @post post
   * @var string
   */
  public $s_uid = '';

  /**
   * A note to store with each client purchase and to show on the receipt. Empty string for no note.
   *
   * @post post
   * @var string
   */
  public $text_note = '';
}

?>