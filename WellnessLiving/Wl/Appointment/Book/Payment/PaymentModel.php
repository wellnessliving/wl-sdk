<?php

namespace WellnessLiving\Wl\Appointment\Book\Payment;

use WellnessLiving\WlModelAbstract;

/**
 * Information about payments for an appointment.
 */
class PaymentModel extends WlModelAbstract
{
  /**
   * The data of the prepaid promotion.
   *
   * See description of <tt>\Wl\Appointment\Book\Payment\PaymentApi::get()</tt> at PHP side for structure of this array.
   *
   * @get result
   * @var array
   */
  public $a_promotion_data = [];

  /**
   * Information about selected purchase items.
   * Fields - string in format <tt>id_purchase_item-k_id</tt>.
   * Values - array with next stricture:
   * <ul>
   *   <li>
   *     {} <tt>a_tax</tt>
   *     A list of tax for the sale item.
   *     See description of <tt>\Wl\Appointment\Book\Payment\PaymentApi::get()</tt> at PHP side
   *     for structure of this array.
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
   * All data from the provider model {@link Wl_Appointment_Book_ProviderModel}.
   *
   * @get get
   * @post get
   * @var array
   */
  public $a_book_data = [];

  /**
   * A list of payment sources.
   *
   * See description of <tt>\Wl\Pay\Form\FormApiTrait::$a_pay_form</tt> at PHP side for structure of this array.
   *
   * Value of this field is gathered from payment form with {@link Wl_Pay_FormModelMixin.paySet()}.
   *
   * @post post
   * @var array
   */
  public $a_pay_form = [];

  /**
   * Payment type for the appointment, one of {@link RsAppointmentPaySid} constants.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post result
   * @var int
   */
  public $id_pay = null;

  /**
   * Purchase item ID.
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