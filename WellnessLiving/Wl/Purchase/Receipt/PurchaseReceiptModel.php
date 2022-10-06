<?php

namespace WellnessLiving\Wl\Purchase\Receipt;

use WellnessLiving\WlModelAbstract;

/**
 * Data of certain purchase for a receipt.
 */
class PurchaseReceiptModel extends WlModelAbstract
{
  /**
   * Information about rest amount on personal user account after payment of purchase. Every element has keys:
   * <dl>
   *   <dt>
   *     string <var>m_amount</var>
   *   </dt>
   *   <dd>
   *     Rest amount on user account.
   *   </dd>
   *   <dt>
   *     string <var>text_currency</var>
   *   </dt>
   *   <dd>
   *     Currency of the amount.
   *   </dd>
   *   <dt>
   *     string <var>text_method</var>
   *   </dt>
   *   <dd>
   *     Payment method title.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_account_rest;

  /**
   * Information about business:
   * <dl>
   *   <dt>
   *     array <var>a_logo</var>
   *   </dt>
   *   <dd>
   *     Business logo:
   *     <dl>
   *       <dt>
   *         int <var>i_height</var>
   *       </dt>
   *       <dd>
   *         Image height.
   *       </dd>
   *       <dt>
   *         int <var>i_width</var>
   *       </dt>
   *       <dd>
   *         Image width.
   *       </dd>
   *       <dt>
   *         bool <var>is_empty</var>
   *       </dt>
   *       <dd>
   *         Whether image is empty.
   *       </dd>
   *       <dt>
   *         string <var>text_url</var>
   *       </dt>
   *       <dd>
   *         URL of the image.
   *       </dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     string <var>text_address</var>
   *   </dt>
   *   <dd>
   *     Business address.
   *   </dd>
   *   <dt>
   *     string <var>text_mail</var>
   *   </dt>
   *   <dd>
   *     Business mail.
   *   </dd>
   *   <dt>
   *     string <var>text_phone</var>
   *   </dt>
   *   <dd>
   *     Business phone.
   *   </dd>
   *   <dt>
   *     string <var>text_title</var>
   *   </dt>
   *   <dd>
   *     Business name.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_business;

  /**
   * Payment transaction information. Every element has keys:
   * <dl>
   *   <dt>
   *     string <var>text_card_number</var>
   *   </dt>
   *   <dd>
   *     Card or account number.
   *   </dd>
   *   <dt>
   *     string <var>text_card_system</var>
   *   </dt>
   *   <dd>
   *     Card system name from {@link \ACardSystemSid}.
   *   </dd>
   *   <dt>
   *     string <var>text_title</var>
   *   </dt>
   *   <dd>
   *     Payment account title. 'Account number' for ACH, Card for all other.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_card;

  /**
   * Information about customer:
   * <dl>
   *   <dt>
   *     string <var>text_address</var>
   *   </dt>
   *   <dd>
   *     Customer address.
   *   </dd>
   *   <dt>
   *     string <var>text_mail</var>
   *   </dt>
   *   <dd>
   *     Customer mail.
   *   </dd>
   *   <dt>
   *     string <var>text_name</var>
   *   </dt>
   *   <dd>
   *     Customer name.
   *   </dd>
   *   <dt>
   *     string <var>text_phone</var>
   *   </dt>
   *   <dd>
   *     Customer phone.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_customer;

  /**
   * List of payment methods of current purchase. Every element has keys:
   * <dl>
   *   <dt>
   *     string <var>m_amount</var>
   *   </dt>
   *   <dd>
   *     Amount of the payment.
   *   </dd>
   *   <dt>
   *     string <var>text_currency</var>
   *   </dt>
   *   <dd>
   *     Currency of the amount.
   *   </dd>
   *   <dt>
   *     string <var>text_pay_method</var>
   *   </dt>
   *   <dd>
   *     Payment method title.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_pay_method;

  /**
   * Full information about prices of the purchase:
   * <dl>
   *   <dt>
   *     string <var>m_discount</var>
   *   </dt>
   *   <dd>
   *     Discount amount.
   *   </dd>
   *   <dt>
   *     string <var>m_discount_code</var>
   *   </dt>
   *   <dd>
   *     Discount amount for a discount code.
   *   </dd>
   *   <dt>
   *     string <var>m_sum</var>
   *   </dt>
   *   <dd>
   *     Subtotal amount - sum of the prices.
   *   </dd>
   *   <dt>
   *     string <var>m_tax</var>
   *   </dt>
   *   <dd>
   *     Taxes amount.
   *   </dd>
   *   <dt>
   *     string <var>m_tip</var>
   *   </dt>
   *   <dd>
   *     Tip amount.
   *   </dd>
   *   <dt>
   *     string <var>m_total</var>
   *   </dt>
   *   <dd>
   *     Total amount.
   *   </dd>
   *   <dt>
   *     string <var>text_currency</var>
   *   </dt>
   *   <dd>
   *     Currency of the purchase.
   *   </dd>
   *   <dt>
   *     string <var>text_discount_code</var>
   *   </dt>
   *   <dd>
   *     Discount code applied to the purchase.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_price;

  /**
   * List of purchase items. Every element has keys:
   * <dl>
   *   <dt>
   *     array <var>a_logo</var>
   *   </dt>
   *   <dd>
   *     Purchase item logo:
   *     <dl>
   *       <dt>
   *         int <var>i_height</var>
   *       </dt>
   *       <dd>
   *         Image height.
   *       </dd>
   *       <dt>
   *         int <var>i_width</var>
   *       </dt>
   *       <dd>
   *         Image width.
   *       </dd>
   *       <dt>
   *         bool <var>is_empty</var>
   *       </dt>
   *       <dd>
   *         Whether image is empty.
   *       </dd>
   *       <dt>
   *         string <var>text_url</var>
   *       </dt>
   *       <dd>
   *         URL of the image.
   *       </dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     int <var>i_count</var>
   *   </dt>
   *   <dd>
   *     Count of items in the purchase.
   *   </dd>
   *   <dt>
   *     int <var>k_purchase_item</var>
   *   </dt>
   *   <dd>
   *     Purchase item key. Primary key in {@link \RsPurchaseItemSql} table.
   *   </dd>
   *   <dt>
   *     string <var>m_price</var>
   *   </dt>
   *   <dd>
   *     Price of the single item.
   *   </dd>
   *   <dt>
   *     string <var>m_price_total</var>
   *   </dt>
   *   <dd>
   *     Price of all items.
   *   </dd>
   *   <dt>
   *     string <var>text_category</var>
   *   </dt>
   *   <dd>
   *     Type of the item: product, class pass, etc.
   *   </dd>
   *   <dt>
   *     string <var>text_currency</var>
   *   </dt>
   *   <dd>
   *     Currency of the price.
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
   *     Name of the purchase item.
   *   </dd>
   *   <dt>
   *     string <var>text_description</var>
   *   </dt>
   *   <dd>
   *     Description of the purchase item.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_purchase_item;

  /**
   * Local date of the purchase in MySQL format.
   *
   * @get result
   * @var string
   */
  public $dtl_purchase;

  /**
   * Whether payment was signed.
   *
   * @get result
   * @var bool
   */
  public $has_signature;

  /**
   * HTML representation of purchase receipt.
   *
   * @get result
   * @var string
   */
  public $html_receipt;

  /**
   * Purchase key. Primary key {@link \RsPurchaseSql} table.
   *
   * @get get
   * @var string
   */
  public $k_purchase;

  /**
   * Normalized purchase ID.
   *
   * @get result
   * @var string
   */
  public $text_purchase_id;

  /**
   * Receipt text set in store settings.
   *
   * @get result
   * @var string
   */
  public $text_receipt;
}

?>