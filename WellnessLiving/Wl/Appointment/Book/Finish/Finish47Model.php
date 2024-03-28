<?php

namespace WellnessLiving\Wl\Appointment\Book\Finish;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Appointment\Book\Question\QuestionModel;
use WellnessLiving\Wl\Appointment\WlAppointmentPaySid;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;

/**
 * An endpoint that completes an appointment booking.
 */
class Finish47Model extends WlModelAbstract
{
  /**
   * A list of answers for the questions from {@link QuestionModel::$a_question}.
   * Keys refer to hashes of the questions. Values refer to answers for the questions.
   *
   * @post post
   * @var array
   */
  public $a_answer = [];

  /**
   * The keys of the booked appointments.
   * Every element has key:
   * <dl>
   *   <dt>
   *     string <var>k_appointment</var>
   *   </dt>
   *   <dd>
   *     The appointment key.
   *   </dd>
   * </dl>
   *
   * @post result
   * @var array[]
   */
  public $a_appointment = null;

  /**
   * The documentation is the same as in {@link FinishModel::$a_book_data}.
   *
   * @post post
   * @var array
   */
  public $a_book_data = [];

  /**
   * The activity keys of the bookings that were made.
   *
   * @post result
   * @var string[]
   */
  public $a_login_activity_visit = null;

  /**
   * A list of payment sources to pay with.
   *
   * @post post
   * @var array[]
   */
  public $a_pay_form = [];

  /**
   * Data required for payment. Has next structure:<dl>
   *   <dt>int <var>id_purchase_item</var></dt>
   *   <dd>Type of the purchase item. One of the {@link WlPurchaseItemSid} constants.</dd>
   *   <dt>string <var>k_id</var></dt>
   *   <dd>Promotion key or appointment key. Depends on <var>id_purchase_item</var> of this array.</dd>
   *   <dt>string <var>k_login_promotion</var></dt>
   *   <dd>Login promotion key.</dd>
   *   <dt>string <var>k_session_pass</var></dt>
   *   <dd>Session pass key.</dd>
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
   * Empty if no purchases are made for appointment booking.
   *
   * @post post
   * @var string[]
   */
  public $a_purchase_item = [];

  /**
   * List of quiz response keys.
   *
   * @post post
   * @var array
   */
  public $a_quiz_response = [];

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
   * Data to create new user.
   * Specify if <var>$uid</var> is empty.
   * Must contain the following keys:
   * <dl>
   *   <dt>string[] <var>a_note</var></dt>
   *   <dd>List of notes to add to user.</dd>
   *   <dt>string <var>text_mail</var></dt>
   *   <dd>Mail.</dd>
   *   <dt>string <var>text_name_first</var></dt>
   *   <dd>First name.</dd>
   *   <dt>string <var>text_name_last</var></dt>
   *   <dd>Last name.</dd>
   *   <dt>string <var>text_phone</var></dt>
   *   <dd>Phone.</dd>
   * </dl>
   *
   * @post get
   * @var array
   */
  public $a_user = [];

  /**
   * The keys of visits.
   *
   * @post result
   * @var string[]
   */
  public $a_visit = null;

  /**
   * The booking mode ID. One of the {@link \WellnessLiving\Wl\Mode\ModeSid} constants.
   *
   * @post post
   * @var int
   */
  public $id_mode = 0;

  /**
   * The payment type ID for the appointment. One of the {@link WlAppointmentPaySid} constants.
   *
   * @post get
   * @var int
   */
  public $id_pay = 0;

  /**
   * Whether multiple appointments booked in back-to-back mode.
   *
   * @post post
   * @var bool
   */
  public $is_back_to_back = false;

  /**
   * If `true`, the appointment is booked as unpaid. Otherwise, this will be `false` to select an available Purchase Option.
   *
   * @post post
   * @var bool
   */
  public $is_unpaid_force = false;

  /**
   * `true` if client is walk-in, otherwise `false`.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $is_walk_in = false;

  /**
   * The appointment key.
   * This should be set if you are rebooking an existing appointment.
   *
   * Otherwise use `0` to book a new appointment.
   *
   * @post get
   * @var string
   */
  public $k_appointment = '0';

  /**
   * The business key.
   *
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * Location to show available appointment booking schedule.
   *
   * @get get,result
   * @post get
   * @var string
   */
  public $k_location = '0';

  /**
   * Key of timezone.
   *
   * `null` if not set then use default timezone client {@link Wl\Profile\Timezone\ProfileTimezone::createInBusiness()}.
   *
   * @post get
   * @var null|string
   */
  public $k_timezone = null;

  /**
   * The sum paid for a deposit.
   *
   * @post post
   * @var string
   */
  public $m_pay = '0';

  /**
   * Unique identifier of the wizard.
   *
   * @post post
   * @var string
   */
  public $s_id = '';

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