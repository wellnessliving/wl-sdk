<?php

namespace WellnessLiving\Wl\Appointment\Book\Finish;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Appointment\Book\Question\QuestionModel;
use WellnessLiving\Wl\Appointment\WlAppointmentPaySid;
use WellnessLiving\Wl\Mode\ModeSid;

/**
 * Pays for an appointment or appointment Purchase Option for a client.
 */
class FinishMultipleModel extends WlModelAbstract
{
  /**
   * A list of answers for the questions from {@link QuestionModel::$a_question}.
   *
   * 1st dimension - provider index.
   * 2nd dimension - keys refer to hashes of the questions. Values refer to answers for the questions.
   *
   * @post post
   * @var string[][]
   */
  public $a_answer = [];

  /**
   * The booked appointments. Every element has the key:
   *
   * @post result
   * @var array[]
   */
  public $a_appointment = [];

  /**
   * All data required to book an appointment.
   *
   * @post post
   * @var array
   */
  public $a_book_data = [];

  /**
   * The activity IDs of bookings that have been made.
   *
   * @post result
   * @var string[]
   */
  public $a_login_activity_visit;

  /**
   * Information for sending an appointment notification.
   *
   * @post post
   * @var array
   */
  public $a_notification = [];

  /**
   * The sum paid.
   *
   * Keys refer to provider indexes.
   *
   * @post post
   * @var string[]
   */
  public $a_paid = [];

  /**
   * The payment type for the appointment. One of the {@link WlAppointmentPaySid} constants.
   *
   * Keys refer to provider indexes.
   *
   * @post get
   * @var int[]
   */
  public $a_pay = [];

  /**
   * A list of payment sources to pay with.
   *
   * Each source contains: 
   *
   * @post post
   * @var array[]
   */
  public $a_pay_form = [];

  /**
   * Data required for payment with the next structure:
   *
   * @post post
   * @var array
   */
  public $a_payment_data = [];

  /**
   * The purchase items keys.
   * This will be empty if no purchases have been made for the appointment booking.
   *
   * Keys refer to provider indexes.
   * Value is array of item keys.
   *
   * @post post
   * @var string[][]
   */
  public $a_purchase_item = [];

  /**
   * The list of quiz response keys.
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
   * Data to create new users.
   * Specify this if <var>$uid</var> is empty.
   * The data must contain the next keys:
   *
   * @post get
   * @var array
   */
  public $a_user = [];

  /**
   * The visit IDs.
   *
   * @post result
   * @var string[]
   */
  public $a_visit = [];

  /**
   * Keys of booked visits.
   *
   * Structured into a two-dimensional array.
   * 1st dimension - providers; 2nd dimension - visit keys inside a provider.
   *
   * @post result
   * @var string[][]
   */
  public $a_visit_provider = [];

  /**
   * The mode type. One of the {@link ModeSid} constants.
   *
   * @post post
   * @var int
   */
  public $id_mode = 0;

  /**
   * Determines whether multiple appointments have been booked in back-to-back mode.
   *
   * @post post
   * @var bool
   */
  public $is_back_to_back = false;

  /**
   * This will be `true` when trying to make a test booking and rollback should be applied.
   * Otherwise, this will be `false`.
   *
   * If the flag is set to `true`, credit card requirement will be ignored during this check.
   *
   * @post post
   * @var bool
   */
  public $is_try = false;

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
   * Specify this to reschedule a certain appointment.
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