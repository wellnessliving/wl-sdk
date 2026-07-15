<?php

namespace WellnessLiving\Wl\Billing\Bulk;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;
use WellnessLiving\Wl\WlProgramSid;
use WellnessLiving\Wl\WlProgramTypeSid;

/**
 * Returns the list of promotions and products of a business that are available at a specific location.
 *
 * Intended for backend staff scenarios (for example, the "Bulk bill" popup).
 * Promotions are returned with their prices; products are expanded into their options, each with its own price and
 *  location availability.
 *
 * @method WlModelRequest get() Gets the list of promotions and products available at the location.  Validates access to the business, then loads promotions with their prices and products expanded into  their options, keeping only the items available at the requested location.
 * @method WlModelRequest post() Prepares the bulk billing review: the per-client totals and the list of clients that will be billed.  Validates access to the business, calculates the per-client subtotal, tax and total for the selected purchase  items, and collects each client contact data and payment method label. The list of clients skipped due to  restrictions is returned separately and is empty for now.
 */
class PurchaseItemListModel extends WlModelAbstract
{
  /**
   * The list of clients that will be billed. Each element has the following structure: 
   *
   * <dl>
   *   <dt>string `text_mail`</dt>
   *   <dd>The client email address. Empty string if the client has no email.</dd>
   * 
   *   <dt>string `text_name`</dt>
   *   <dd>The client full name.</dd>
   * 
   *   <dt>string `text_pay_method`</dt>
   *   <dd>
   *     The payment method label for this client. `Account` when billing to the client account; otherwise the
   * default stored card label (for example, `Visa ****1234`), the default ACH account label when no card is on
   * file, or an account fallback when neither is on file.
   *   </dd>
   * 
   *   <dt>string `text_phone`</dt>
   *   <dd>The client cell phone number. Empty string if the client has no cell phone.</dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>The client user key. </dd>
   * </dl>
   * @post result
   * @var array[]
   */
  public $a_client_bill = [];

  /**
   * The list of clients that will be skipped due to restrictions. Each element has the same structure as an
   *  element of {@link PurchaseItemListModel::$a_client_bill}.
   *
   * This list is always empty for now and will be populated once the restriction checks are implemented.
   *
   * @post result
   * @var array[]
   */
  public $a_client_ignore = [];

  /**
   * The list of products available at the location. Each element has the following structure: 
   *
   * <dl>
   *   <dt>array[] `a_option`</dt>
   *   <dd>
   *     The list of product options available at the location. Each element has the following structure:
   *     <dl>
   *       <dt>bool `is_inventory`</dt>
   *       <dd>`true` if the product tracks inventory, `false` otherwise.</dd>
   * 
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
   * The list of client user keys to bill.
   *
   * @post post
   * @var string[]
   */
  public $a_uid = [];

  /**
   * Whether to charge the client default payment method (`true`) or bill the client account (`false`).
   *
   * @post post
   * @var bool
   */
  public $is_payment_method_default = false;

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
   * The total amount charged across every client that will be billed (per-client total multiplied by the number
   *  of billed clients). Excludes taxes when {@link PurchaseItemListModel::$is_tax} is `false`.
   *
   * @post result
   * @var string
   */
  public $m_batch = '0';

  /**
   * The subtotal per client (sum of the selected purchase item prices, excluding taxes).
   *
   * @post result
   * @var string
   */
  public $m_subtotal = '0';

  /**
   * The tax amount per client. Always `0` when {@link PurchaseItemListModel::$is_tax} is `false`.
   *
   * @post result
   * @var string
   */
  public $m_tax = '0';

  /**
   * The total per client (subtotal plus tax).
   *
   * @post result
   * @var string
   */
  public $m_total = '0';
}

?>