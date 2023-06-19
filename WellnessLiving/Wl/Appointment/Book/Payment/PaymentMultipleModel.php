<?php

namespace WellnessLiving\Wl\Appointment\Book\Payment;

use WellnessLiving\WlModelAbstract;

/**
 * Allows to pay an appointment or appointment purchase option for the client.
 *
 * Only difference from {@link PaymentModel} is possibility to pay for a lot of appointments at the same time.
 */
class PaymentMultipleModel extends WlModelAbstract
{
  /**
   * Structure of this array corresponds to the structure of
   * the <tt>Wl_Appointment_Book_ProviderAbstractModel</tt> class in JavaScript,
   * which is normally used as its subclass <tt>Wl_Appointment_Book_ProviderModel</tt>.
   * Property of the object is stored as an element of this array with the same name.
   *
   * @get get
   * @var array
   */
  public $a_book_data = [];

  /**
   * Structure of this array corresponds to the structure of
   * the <tt>Wl_Appointment_Book_ProviderAbstractModel</tt> class in JavaScript,
   * which is normally used as its subclass <tt>Wl_Appointment_Book_ProviderModel</tt>.
   * Property of the object is stored as an element of this array with the same name.
   *
   * @post post
   * @var array
   */
  public $a_book_data_post = [];

  /**
   * Payment type for the appointment, one of {@link WlAppointmentPaySid} constants.
   *
   * @post result
   * @var int[]
   */
  public $a_pay;

  /**
   * Information about selected login promotion.
   *
   * <dl>
   *   <dt>
   *     int <var>i_limit</var>
   *   </dt>
   *   <dd>
   *      Limit on the visit count of the promotion.
   *   </dd>
   *   <dt>
   *     int <var>i_remain</var>
   *   </dt>
   *   <dd>
   *     Count of remaining visits.
   *   </dd>
   *   <dt>
   *     string <var>s_expire</var>
   *   </dt>
   *   <dd>
   *     The expiration date.
   *   </dd>
   *   <dt>
   *     string <var>s_title</var>
   *   </dt>
   *   <dd>
   *     The title of promotion.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_promotion_data;

  /**
   * Fields - string in format <tt>id_purchase_item-k_id</tt>. Values - array with next stricture:
   * <dl>
   *   <dt>
   *     array <var>a_tax</var>
   *   </dt>
   *   <dd>
   *     Contains information about taxes in the following format. A list of taxes to apply. The array keys are <tt>k_tax</tt> keys. Each element contains the following fields:
   *     <dl>
   *       <dt>
   *         float <var>m_tax</var>
   *       </dt>
   *       <dd>
   *         Tax rate.
   *       </dd>
   *       <dt>
   *         string <var>text_title</var>
   *       </dt>
   *       <dd>
   *         Name of the tax.
   *       </dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     string <var>id_purchase_item</var>
   *   </dt>
   *   <dd>
   *     Purchase item ID. One of {@link \RsPurchaseItemSid} constant.
   *   </dd>
   *   <dt>
   *     string <var>k_id</var>
   *   </dt>
   *   <dd>
   *     The value of the discount used for purchase.
   *   </dd>
   *   <dt>
   *     string <var>m_discount</var>
   *   </dt>
   *   <dd>
   *     The value of the discount used for purchase.
   *   </dd>
   *   <dt>
   *     string <var>m_pay</var>
   *   </dt>
   *   <dd>
   *     The payment for the promotion or single visit without taxes.
   *   </dd>
   *   <dt>
   *     string <var>m_price</var>
   *   </dt>
   *   <dd>
   *     The price of the promotion or single visit.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_purchase;

  /**
   * Purchase item IDs from the database.
   *
   * @post result
   * @var string[]|null
   */
  public $a_purchase_item;

  /**
   * List of quiz response keys.
   * Key is a quiz key.
   * Value is a response key.
   *
   * @post post
   * @var array
   */
  public $a_quiz_response = [];

  /**
   * The price of service with the tax without surcharge.
   *
   * @get result
   * @var string
   */
  public $a_total;

  /**
   * Key of source mode. One of {@link \WellnessLiving\Wl\Mode\ModeSid} constants.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_mode = 0;

  /**
   * The location key.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $k_location = null;

  /**
   * Kye of activity of purchase is made. Empty if no purchase is made.
   *
   * @post result
   * @var string
   */
  public $k_login_activity_purchase;

  /**
   * Gift card amount.
   *
   * @get result
   * @var string
   */
  public $m_coupon;

  /**
   * Discount amount.
   *
   * @get result
   * @var string
   */
  public $m_discount;

  /**
   * Surcharge amount.
   *
   * @get result
   * @var string
   */
  public $m_surcharge;

  /**
   * The tax of service.
   *
   * @get result
   * @var string
   */
  public $m_tax;

  /**
   * The price of service with the tax without surcharge.
   *
   * @get result
   * @var string
   */
  public $m_total;

  /**
   * Gift card code.
   *
   * @get get
   * @post get
   * @var string
   */
  public $text_coupon_code = '';

  /**
   * Discount code.
   *
   * @get get
   * @post get
   * @var string
   */
  public $text_discount_code = '';

  /**
   * The user's key.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $uid = null;
}

?>