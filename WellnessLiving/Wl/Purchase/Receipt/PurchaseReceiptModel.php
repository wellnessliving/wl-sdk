<?php

namespace WellnessLiving\Wl\Purchase\Receipt;

use WellnessLiving\Core\a\ACardSystemSid;
use WellnessLiving\WlModelAbstract;

/**
 * Returns receipt data of certain purchase.
 */
class PurchaseReceiptModel extends WlModelAbstract
{
  /**
   * Information about the account balance for a user's account after payment for the purchase. Every element has the following keys:
   * <dl>
   *   <dt>
   *     string <var>m_amount</var>
   *   </dt>
   *   <dd>
   *     The account balance on the user's account.
   *   </dd>
   *   <dt>
   *     string <var>text_currency</var>
   *   </dt>
   *   <dd>
   *     The currency of the amount.
   *   </dd>
   *   <dt>
   *     string <var>text_method</var>
   *   </dt>
   *   <dd>
   *     The payment method title.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_account_rest = [];

  /**
   * Information about the business.
   * <dl>
   *   <dt>
   *     array <var>a_logo</var>
   *   </dt>
   *   <dd>
   *     The business logo.
   *     <dl>
   *       <dt>
   *         int <var>i_height</var>
   *       </dt>
   *       <dd>
   *         The image height.
   *       </dd>
   *       <dt>
   *         int <var>i_width</var>
   *       </dt>
   *       <dd>
   *         The image width.
   *       </dd>
   *       <dt>
   *         bool <var>is_empty</var>
   *       </dt>
   *       <dd>
   *         This will be `true` if the image is empty. Otherwise, this will be `false`.
   *       </dd>
   *       <dt>
   *         string <var>text_url</var>
   *       </dt>
   *       <dd>
   *         The URL of the image.
   *       </dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     string <var>text_address</var>
   *   </dt>
   *   <dd>
   *     The business's address.
   *   </dd>
   *   <dt>
   *     string <var>text_mail</var>
   *   </dt>
   *   <dd>
   *     The business's email address.
   *   </dd>
   *   <dt>
   *     string <var>text_phone</var>
   *   </dt>
   *   <dd>
   *     The business's phone number.
   *   </dd>
   *   <dt>
   *     string <var>text_title</var>
   *   </dt>
   *   <dd>
   *     The business name.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_business = [];

  /**
   * Payment transaction information. Every element has the following keys:
   * <dl>
   *   <dt>
   *     string <var>text_card_number</var>
   *   </dt>
   *   <dd>
   *     The card or account number.
   *   </dd>
   *   <dt>
   *     string <var>text_card_system</var>
   *   </dt>
   *   <dd>
   *     The card system name from {@link ACardSystemSid}.
   *   </dd>
   *   <dt>
   *     string <var>text_title</var>
   *   </dt>
   *   <dd>
   *     The payment account title. This will be 'Account number' for ACH, 'Card' for all other cases.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_card = [];

  /**
   * Information about the customer.
   * <dl>
   *   <dt>
   *     string <var>text_address</var>
   *   </dt>
   *   <dd>
   *     The customer's address.
   *   </dd>
   *   <dt>
   *     string <var>text_mail</var>
   *   </dt>
   *   <dd>
   *     The customer's email address.
   *   </dd>
   *   <dt>
   *     string <var>text_name</var>
   *   </dt>
   *   <dd>
   *     The customer's name.
   *   </dd>
   *   <dt>
   *     string <var>text_phone</var>
   *   </dt>
   *   <dd>
   *     The customer's phone number.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_customer = [];

  /**
   * A list of payment methods for the current purchase. Every element has the following keys:
   * <dl>
   *   <dt>
   *     string <var>m_amount</var>
   *   </dt>
   *   <dd>
   *     The amount of the payment.
   *   </dd>
   *   <dt>
   *     string <var>text_currency</var>
   *   </dt>
   *   <dd>
   *     The currency of the amount.
   *   </dd>
   *   <dt>
   *     string <var>text_pay_method</var>
   *   </dt>
   *   <dd>
   *     The payment method title.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_pay_method = [];

  /**
   * Complete information about price information for the purchase.
   * <dl>
   *   <dt>
   *     string <var>m_discount</var>
   *   </dt>
   *   <dd>
   *     The discount amount.
   *   </dd>
   *   <dt>
   *     string <var>m_discount_code</var>
   *   </dt>
   *   <dd>
   *     The discount amount for a discount code.
   *   </dd>
   *   <dt>
   *     string <var>m_sum</var>
   *   </dt>
   *   <dd>
   *     The subtotal amount (the sum of the prices).
   *   </dd>
   *   <dt>
   *     string <var>m_tax</var>
   *   </dt>
   *   <dd>
   *     The amount of taxes.
   *   </dd>
   *   <dt>
   *     string <var>m_tip</var>
   *   </dt>
   *   <dd>
   *     The amount of tips.
   *   </dd>
   *   <dt>
   *     string <var>m_total</var>
   *   </dt>
   *   <dd>
   *     The total amount.
   *   </dd>
   *   <dt>
   *     string <var>text_currency</var>
   *   </dt>
   *   <dd>
   *     The currency of the purchase.
   *   </dd>
   *   <dt>
   *     string <var>text_discount_code</var>
   *   </dt>
   *   <dd>
   *     The discount code applied to the purchase.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_price = [];

  /**
   * A list of purchase items. Every element has the following keys:
   * <dl>
   *   <dt>
   *     array <var>a_logo</var>
   *   </dt>
   *   <dd>
   *     The purchase item logo.
   *     <dl>
   *       <dt>
   *         int <var>i_height</var>
   *       </dt>
   *       <dd>
   *         The image height.
   *       </dd>
   *       <dt>
   *         int <var>i_width</var>
   *       </dt>
   *       <dd>
   *         The image width.
   *       </dd>
   *       <dt>
   *         bool <var>is_empty</var>
   *       </dt>
   *       <dd>
   *         Determines whether the image is empty.
   *       </dd>
   *       <dt>
   *         string <var>text_url</var>
   *       </dt>
   *       <dd>
   *         The URL of the image.
   *       </dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     int <var>i_count</var>
   *   </dt>
   *   <dd>
   *     The number of items in the purchase.
   *   </dd>
   *   <dt>
   *     string <var>k_purchase_item</var>
   *   </dt>
   *   <dd>
   *     The key of the purchase item.
   *   </dd>
   *   <dt>
   *     string <var>m_price</var>
   *   </dt>
   *   <dd>
   *     The price of the single item.
   *   </dd>
   *   <dt>
   *     string <var>m_price_total</var>
   *   </dt>
   *   <dd>
   *     The price of all items.
   *   </dd>
   *   <dt>
   *     string <var>text_category</var>
   *   </dt>
   *   <dd>
   *     The type of the item (for example, a pass or membership).
   *   </dd>
   *   <dt>
   *     string <var>text_currency</var>
   *   </dt>
   *   <dd>
   *     The currency of the price.
   *   </dd>
   *   <dt>
   *     string <var>text_info</var>
   *   </dt>
   *   <dd>
   *     Additional information about the purchase item.
   *   </dd>
   *   <dt>
   *     string <var>text_title</var>
   *   </dt>
   *   <dd>
   *     The name of the purchase item.
   *   </dd>
   *   <dt>
   *     string <var>text_description</var>
   *   </dt>
   *   <dd>
   *     The description of the purchase item.
   *   </dd>
   *   <dt>
   *     string <var>url_print</var>
   *   </dt>
   *   <dd>
   *     The URL to print. Only available if the purchase item is a coupon (gift card).
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_purchase_item = [];

  /**
   * The local date of the purchase in MySQL format.
   *
   * @get result
   * @var string
   */
  public $dtl_purchase;

  /**
   * Determines whether the payment contained a signature.
   *
   * @get result
   * @var bool
   */
  public $has_signature;

  /**
   * HTML representation of the purchase receipt.
   *
   * @get result
   * @var string
   */
  public $html_receipt;

  /**
   * Whether {@link PurchaseReceiptModel::$url_print} and {@link PurchaseReceiptModel::$url_print_receipt} require authentication.
   *
   * If `true`, the URL contains a token that allows temporary access to the page without logging in. If 'false', the
   * page requires authentication.
   *
   * @get get
   * @var bool
   */
  public $is_url_public = false;

  /**
   * The key of the purchase.
   *
   * @get get
   * @var string|null
   */
  public $k_purchase = null;

  /**
   * The normalized purchase ID.
   *
   * @get result
   * @var string
   */
  public $text_purchase_id;

  /**
   * The receipt text set in the store settings.
   *
   * @get result
   * @var string
   */
  public $text_receipt;

  /**
   * The URL for printing on a normal printer.
   *
   * @get result
   * @var string
   */
  public $url_print;

  /**
   * The URL for printing on a receipt printer.
   *
   * @get result
   * @var string
   */
  public $url_print_receipt;
}

?>