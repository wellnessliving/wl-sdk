<?php

namespace WellnessLiving\Wl\Appointment\Book\Finish;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Appointment\Book\Question\QuestionModel;
use WellnessLiving\Wl\Appointment\WlAppointmentPaySid;
use WellnessLiving\Wl\Mode\ModeSid;

/**
 * Completes the booking process for a service.
 *
 * This endpoint can be used with an existing client by specifying their UID. It can also be used to create a new
 * client by specifying user details in {@link FinishModel::$a_user} and omitting any UID.
 * This endpoint can be accessed anonymously without authentication, but only when creating clients.
 *
 * @deprecated Use {@link Finish47Model} instead.
 */
class FinishModel extends WlModelAbstract
{
  /**
   * A list of answers for the questions from {@link QuestionModel::$a_question}.
   * Keys refer to hashes of the questions. Values refer to answers for the questions.
   *
   * @post post
   * @var string[]
   */
  public $a_answer = [];

  /**
   * The keys of the booked appointments.
   * Every element has key:
   *
   * @post result
   * @var array[]
   */
  public $a_appointment;

  /**
   * All data from the provider model <tt>Wl_Appointment_Book_ProviderModel</tt>:
   *
   * @post get
   * @var array
   */
  public $a_book_data = [];

  /**
   * The activity keys of the bookings that were made.
   *
   * @post result
   * @var string[]
   */
  public $a_login_activity_visit;

  /**
   * Information for sending an appointment notification.
   *
   * @get result
   * @post post
   * @var array
   */
  public $a_notification = [];

  /**
   * A list of payment sources to pay with.
   *
   * @post post
   * @var array[]
   */
  public $a_pay_form = [];

  /**
   * Data required for payment. Has next structure:
   *
   * @post post
   * @var array
   */
  public $a_payment_data = [];

  /**
   * The purchase item keys.
   * Empty if no purchases are made for the appointment booking.
   *
   * @post post
   * @var string[]
   */
  public $a_purchase_item = [];

  /**
   * A list of quiz response keys.
   * Key is quiz key.
   * Value is quiz response key.
   *
   * @post post
   * @var string[]
   */
  public $a_quiz_response = [];

  /**
   * List of user keys to book appointments.
   * There may be empty values in this list, which means that this is a walk-in.
   *
   * @get get
   * @post get
   * @var string[]
   */
  public $a_uid = [];

  /**
   * Data to create new user.
   * Specify this if <var>uid</var> is empty.
   * Must contain the following keys:
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
  public $a_visit;

  /**
   * Values are arrays with next keys:
   *
   * @post result
   * @var array[]
   */
  public $a_visit_payment;

  /**
   * The booking mode ID. One of the {@link ModeSid} constants.
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
   * Determines whether multiple appointments are booked in back-to-back mode.
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
   * If `true`, the client is a walk-in. Otherwise, this will be `false`.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $is_walk_in = false;

  /**
   * The appointment key.
   * This should be set if you're rebooking an existing appointment.
   *
   * Otherwise, use `0` to book a new appointment.
   *
   * @post get
   * @var string
   */
  public $k_appointment = '0';

  /**
   * The business key.
   *
   * @get get
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
   * `null` if not set then use default timezone client.
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
   * The user key.
   *
   * This field is used if the client books for himself or for the relative.
   *
   * This field is incorrect to use for guest booking since in this case the client will be checked as a relative.
   *
   * In case of a group booking or a guest booking, the key of the client who is making the booking is set here.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>