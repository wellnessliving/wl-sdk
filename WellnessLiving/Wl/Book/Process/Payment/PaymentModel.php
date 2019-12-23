<?php

namespace WellnessLiving\Wl\Book\Process\Payment;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Book\WlBookModeSid;

/**
 * Booking wizard for page "Pay / Billing info".
 */
class PaymentModel extends WlModelAbstract
{
  /**
   * List of items to be bought. Every element has next fields:
   * <ul>
   *   <li>Number <tt>id_purchase_item</tt> ID of purchase item type. One of {@link WlPurchaseItemSid} constants.</li>
   *   <li>Boolean [<tt>is_renew</tt>] <tt>true</tt> - item should be "auto-renew"; <tt>false</tt> - otherwise. If is not set - use default option for this item.</li>
   *   <li>String <tt>k_id</tt> ID of purchase item in database.</li>
   *   <li>String [<tt>s_signature</tt>] Signature of purchase option contract. Not set if purchase option does not require assignment of contract.</li>
   * </ul>
   *
   * @post post
   * @var array
   * @see RsPurchaseItemSid
   */
  public $a_item = [];

  /**
   * IDs of user's activity which correspond to books are made. Not empty when booking process is finished.
   *
   * @post result
   * @var array
   */
  public $a_login_activity_book = [];

  /**
   * A list of payment sources.
   *
   * Value of this field is gathered from payment form.
   *
   * This is an indexed array where each element corresponds to a single selected payment method.
   *
   * Each source contains:<dl>
   * <dt>string <var>f_amount</var></dt><dd>Amount of money to withdraw with this payment source.</dd>
   * <dt>int <var>id_pay_method</var></dt><dd>Payment method ID. One of the {@link WlPayMethodSid} constants.</dd>
   * <dt>bool <var>is_hide</var></dt><dd> Whether this payment method is hidden.
   *   Payment methods will be hidden if they are not enabled for the business.</dd>
   * <dt>bool [<var>is_success</var>=<tt>false</tt>]</dt><dd>Whether this source was successfully charged.</dd>
   * <dt>string <var>s_index</var></dt><dd>
   *   Index of this form. This corresponds the key this item is written in this array with.</dd>
   * </dl>
   *
   * @post post
   * @var array
   */
  public $a_pay_form = [];

  /**
   * Information about purchase items.
   *
   * Fields - string in format <tt>id_purchase_item-k_id</tt>.
   * Values - array with next stricture:
   * <ul>
   *   <li>
   *     <dt>array <var>a_tax</var></dt>
   *     <dd>Contains information about taxes in the following format. A list of taxes to apply. The array keys are
   *       k_tax IDs. Taxes are sorted by name, each element contains the following fields:<dl>
   *
   *       <dt>float <var>f_value</var></dt>
   *       <dd>Tax rate. Meaning of this field depends on value of <var>id_tax</var>.</dd>
   *
   *       <dt>int <var>id_tax</var></dt>
   *       <dd>Type of the tax. One of {@link WlTaxSid} constants.</dd>
   *
   *       <dt>int <var>k_tax</var></dt>
   *       <dd>ID of the tax.</dd>
   *
   *       <dt>string <var>s_tax</var></dt>
   *       <dd>Name of the tax.</dd>
   *
   *       <dt>string <var>f_tax</var></dt>
   *       <dd>Amount of tax applied by this rule.
   *
   *       <dt>string <var>f_tax_discount</var></dt>
   *       <dd>Amount of applied tax considering all discounts.</dd>
   *
   *       <dt>string <var>f_tax_discount_login</var></dt>
   *       <dd>Amount of applied tax considering only discount via client/member type.</dd>
   *
   *       <tt>null</tt> if tax rules are not loaded yet.
   *       </dd>
   *     </dl>
   *   </li>
   *   <li>
   *     String <tt>k_id</tt>
   *     Purchase ID. One of {@link \RsPurchaseSid}.
   *   </li>
   *   <li>
   *     String <tt>id_purchase_item</tt>
   *     Purchase item ID. One of {@link \RsPurchaseItemSid}.
   *   </li>
   *   <li>
   *     String <tt>m_discount</tt>
   *     The value of the discount used for purchase.
   *   </li>
   *   <li>
   *     String <tt>m_pay</tt>
   *     The payment for the promotion or single visit without taxes.
   *   </li>
   *   <li>
   *     String <tt>m_price</tt>
   *     The price of the promotion or single visit.
   *   </li>
   * </ul>
   *
   * @get result
   * @var array
   */
  public $a_purchase = [];

  /**
   * List of assets which are being booked. Every element has next keys:
   * <ul><li>Number <tt>i_index</tt> Number of asset. Actual for assets with quantity greater <tt>1</tt>.</li>
   * <li>String <tt>k_resource</tt> ID of asset.</li></ul>
   *
   * @post post
   * @var array
   */
  public $a_resource = [];

  /**
   * List of session which are being booked.
   * Keys - IDs of sessions in database; values - lists of session date/time.
   *
   * @post post
   * @var array
   */
  public $a_session = [];

  /**
   * IDs of books are made.
   *
   * @post result
   * @var array
   */
  public $a_visit = [];

  /**
   * Date/time of session is booked.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $dt_date_gmt = null;

  /**
   * WellnessLiving mode type, one of the {@link WlBookModeSid} constants.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_mode = WlBookModeSid::APP_FRONTEND;

  /**
   * ID of session.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_class_period = null;

  /**
   * ID of user's activity which corresponds to purchase is made. Not empty when booking process is finished.
   *
   * @post result
   * @var string
   */
  public $k_login_activity_purchase = '0';

  /**
   * Discount code to be applied to purchase.
   *
   * @get get
   * @post get
   * @var string
   */
  public $text_discount_code = '';

  /**
   * User ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = null;
}

?>