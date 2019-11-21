<?php

namespace WellnessLiving\Wl\Appointment\Book\Payment;

use WellnessLiving\WlModelAbstract;

/**
 * Information about payments for an appointment.
 */
class PaymentModel extends WlModelAbstract
{
  /**
   * Information detailing an appointment booking.
   *
   * @get get
   * @post get
   * @var array
   */
  public $a_book_data = [];

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
   * Information about any prepaid promotions.
   *
   *   <dt>string <var>i_limit</var></dt>
   *   <dd>The limit of total visits.</dd>
   *
   *   <dt>int <var>i_remain</var></dt>
   *   <dd>The number of remaining visits.</dd>
   *
   *   <dt>string <var>s_expire</var></dt>
   *   <dd>The expiration date.</dd>
   *
   *   <dt>string <var>s_title</var></dt>
   *   <dd>The title of promotion.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_promotion_data = [];

  /**
   * Information about selected purchase items.
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
   * Purchase item IDs from the database.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post result
   * @var array|null
   */
  public $a_purchase_item = null;

  /**
   * Key of source mode. One of {@link \\WellnessLiving\WlModeSid} constants.
   *
   * @post get
   * @var int
   */
  public $id_mode;

  /**
   * Payment type for the appointment, one of {@link WlAppointmentPaySid} constants.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post result
   * @var int
   */
  public $id_pay = null;

  /**
   * Purchase item ID. One of the {@link WlPurchaseItemSid} constants.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @post get
   * @var int|null
   */
  public $id_purchase_item = null;

  /**
   * Business ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Item ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $k_id = null;

  /**
   * Location ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $k_location = null;

  /**
   * ID of activity of purchase is made. Empty if no purchase is made.
   *
   * @post result
   * @var string
   */
  public $k_login_activity_purchase = '0';

  /**
   * Login promotion ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_login_promotion = null;

  /**
   * Total cost of a purchase.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $m_total = null;

  /**
   * User ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $uid = null;
}

?>