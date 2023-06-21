<?php

namespace WellnessLiving\Wl\Appointment\Book\Payment;

use WellnessLiving\WlModelAbstract;

/**
 * Allows to pay an appointment or appointment purchase option for the client.
 *
 * Only difference from {@link \Wellnessliving\Wl\Appointment\Book\Payment\PaymentModel} is possibility to pay for a lot of appointments at the same time.
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
   * Payment type for the appointment, one of {@link \Wellnessliving\RsAppointmentPaySid} constants.
   *
   * @post result
   * @var int[]
   */
  public $a_pay;

  /**
   * A list of payment sources to pay with.
   *
   * Structure of this array corresponds structure of {@link RsPayForm::$a_pay_source}.
   *
   * @post post
   * @var array[]
   */
  public $a_pay_form = [];

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
   *     Purchase item ID. One of {@link \WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid} constant.
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
   * Key is quiz key from {@link \Core\Quiz\QuizSql} table.
   * Value is response key from {@link \Core\Quiz\Response\ResponseSql} table.
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
   * List of user keys to book appointments - primary keys in {@link \PassportLoginSql}.
   * There may be empty values in this list, which means that this is a walk-in.
   *
   * @get get
   * @post get
   * @var string[]
   */
  public $a_uid = [];

  /**
   * Key of source mode. One of {@link \Wellnessliving\Wl\Mode\ModeSid} constants.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_mode = 0;

  /**
   * `true` if client is walk-in, otherwise `false`.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $is_walk_in = false;

  /**
   * Location to show available appointment booking schedule.
   *
   * @get get,result
   * @post get
   * @var string
   */
  public $k_location = '0';

  /**
   * ID of activity of purchase is made. Empty if no purchase is made.
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
   * User to get information for.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>