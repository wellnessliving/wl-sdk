<?php

namespace WellnessLiving\Wl\Appointment\Book\Finish;

use WellnessLiving\Wl\Book\WlBookModeSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Appointment\WlAppointmentPaySid;

/**
 * Completes the booking process for a service.
 *
 * This endpoint can be used with an existing client by specifying their uid. It can also be used to create a new
 * client by specifying user details in a_user and omitting any uid. This endpoint can be accessed anonymously without
 * authentication but only when creating clients.
 *
 * @deprecated Use {@link Finish47Model} instead.
 */
class FinishModel extends WlModelAbstract
{
  /**
   * A list of answers for the questions from {@link \WellnessLiving\Wl\Appointment\Book\Question\QuestionModel::a_question}.
   * Key - hash of the question, value - answer for the question.
   *
   * @post post
   * @var array
   */
  public $a_answer = [];

  /**
   * The keys of the booked appointments.
   *
   * @post result
   * @var array
   */
  public $a_appointment = [];

  /**
   * The activity keys of the bookings that were made.
   *
   * @post result
   * @var array
   */
  public $a_login_activity_visit = [];

  /**
   * All data from the provider model {@link Wl_Appointment_Book_ProviderModel}.
   *
   * @post get
   * @var array
   */
  public $a_book_data = [];

  /**
   * A list of payment sources to pay with.
   *
   * Structure of this array corresponds structure of {@link \RsPayForm::$a_pay_source}.
   *
   * @post post
   * @var array[]
   */
  public $a_pay_form = [];

  /**
   * Data required for payment. Has next structure:<dl>
   *   <dt>int <var>id_purchase_item</var></dt>
   *   <dd>Type of the purchase item. One of the {@link \RsPurchaseItemSid} constants.</dd>
   *   <dt>string <var>k_id</var></dt>
   *   <dd>Promotion key or appointment key. Depends on <var>id_purchase_item</var> of this array.</dd>
   *   <dt>string <var>k_login_promotion</var></dt>
   *   <dd>Login promotion key. Primary key in the {@link \RsLoginPromotionSql} table.</dd>
   *   <dt>string <var>text_discount_code</var></dt>
   *   <dd>Discount code.</dd>
   * </dl>
   *
   * @post post
   * @var array
   */
  public $a_payment_data = [];

  /**
   * The purchase item keys.
   *
   * It is <tt>null</tt> if not set yet.
   *
   * @post post
   * @var array|null
   */
  public $a_purchase_item = null;

  /**
   * Data to create new user.
   * Specify if <var>$uid</var> is empty.
   * Must contain the following keys:
   * <dl><dt>string[] <var>a_note</var></dt><dd>List of notes to add to user.</dd>
   * <dt>string <var>text_mail</var></dt><dd>Mail.</dd>
   * <dt>string <var>text_name_first</var></dt><dd>First name.</dd>
   * <dt>string <var>text_name_last</var></dt><dd>Last name.</dd>
   * <dt>string <var>text_phone</var></dt><dd>Phone.</dd></dl>
   *
   * @post get
   * @var array
   */
  public $a_user = [];

  /**
   * The keys of visits.
   *
   * @post result
   * @var array
   */
  public $a_visit = [];

  /**
   * The WellnessLiving booking mode type, one of the {@link WlBookModeSid} constants.
   *
   * @post post
   * @var int
   */
  public $id_mode = WlBookModeSid::APP_FRONTEND;

  /**
   * The Payment type for the appointment, one of the {@link WlAppointmentPaySid} constants.
   *
   * @post get
   * @var string|null
   */
  public $id_pay = WlAppointmentPaySid::NONE;

  /**
   * The appointment key.
   * This should be set if you are rebooking an existing appointment.
   *
   * Otherwise use <tt>null</tt> to book a new appointment.
   *
   * @post get
   * @var string|null
   */
  public $k_appointment = null;

  /**
   * The business key.
   *
   * It is <tt>null</tt> if not set yet.
   *
   * @post get
   * @var string|null
   */
  public $k_business = null;

  /**
   * The location key.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post get
   * @var string|null
   */
  public $k_location = null;

  /**
   * The sum paid for a deposit.
   *
   * @post post
   * @var string
   */
  public $m_pay = '';

  /**
   * The user key.
   *
   * It is <tt>null</tt> if not set yet.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $uid = null;
}

?>