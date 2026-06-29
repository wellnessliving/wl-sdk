<?php

namespace WellnessLiving\Wl\Appointment\Book\Finish;

use WellnessLiving\Core\a\ADateWeekSid;
use WellnessLiving\Core\a\ADurationSid;
use WellnessLiving\Core\a\AGenderSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Appointment\Book\Question\QuestionModel;
use WellnessLiving\Wl\Appointment\WlAppointmentPaySid;
use WellnessLiving\Wl\Classes\Tab\TabSid;
use WellnessLiving\Wl\Mode\ModeSid;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;
use WellnessLiving\Wl\WlPayMethodSid;

/**
 * Completes the booking process for a service.
 *
 * This endpoint can be used with an existing client by specifying their UID. It can also be used to create a new
 * client by specifying user details in {@link FinishModel::$a_user} and omitting any UID.
 * This endpoint can be accessed anonymously without authentication, but only when creating clients.
 *
 * @deprecated Use {@link Finish47Model} instead.
 *
 * @method WlModelRequest get() Loads data to prepare client side to complete booking.  Returns notification settings (email, push, SMS) for the appointment creation confirmation  so the client side can display the appropriate notification options before finalizing the booking.
 * @method WlModelRequest post() Completes the appointment booking and processes payment for the client.  Delegates to {@link \Wl\Appointment\Book\Finish\FinishMultipleApi::post()} to handle a single appointment booking, mapping  the legacy single-provider request fields to the multi-provider format. Creates an appointment  record, applies the selected Purchase Option, and sends the booking confirmation notification.
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
   * <dl>
   *   <dt>string `k_appointment`</dt>
   *   <dd>The appointment key. </dd>
   * </dl>
   * @post result
   * @var array[]
   */
  public $a_appointment;

  /**
   * All data from the provider model <tt>Wl_Appointment_Book_ProviderModel</tt>:
   *
   * <dl>
   *   <dt>array `a_conflict`</dt>
   *   <dd>
   *     Information about booking conflicts. Keys are bookings dates/times in MySQL format in UTC. Values are arrays with next keys:
   *     <dl>
   *       <dt>string `dt_date_local`</dt>
   *       <dd>New appointment date/time in MySQL in locale timezone.</dd>
   * 
   *       <dt>int `i_duration`</dt>
   *       <dd>New asset booking duration.</dd>
   * 
   *       <dt>int `i_index`</dt>
   *       <dd>New asset index.</dd>
   * 
   *       <dt>int `id_conflict`</dt>
   *       <dd>Solution type.</dd>
   * 
   *       <dt>string `k_resource`</dt>
   *       <dd>New asset. </dd>
   * 
   *       <dt>string|null `k_staff`</dt>
   *       <dd>New staff member.  `null` in a case of asset booking.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `a_product`</dt>
   *   <dd>
   *     Add-ons to the appointment. Specify this for appointment bookings only.
   * Old format: array keys refer to primary keys. 
   * New format: each element is an array:
   *     <dl>
   *       <dt>int `i_count`</dt>
   *       <dd>The add-on count</dd>
   * 
   *       <dt>int `i_count_use`</dt>
   *       <dd>The add-on use count.</dd>
   * 
   *       <dt>string `k_shop_product_option`</dt>
   *       <dd>The key of add-on. </dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `a_repeat`</dt>
   *   <dd>
   *     Recurring booking information:
   * 
   * This will be empty if the appointment isn't recurring.
   *     <dl>
   *       <dt>int[] `a_week`</dt>
   *       <dd>
   *         The days of week when appointment repeats. One of the {@link ADateWeekSid} constants.
   * This will be empty if the appointment doesn't repeat weekly.
   *       </dd>
   * 
   *       <dt>string `dl_end`</dt>
   *       <dd>
   *         The date when the appointment's repeat cycle stops. This will be empty if the repeat cycle doesn't stop at a certain date.
   *       </dd>
   * 
   *       <dt>int `i_occurrence`</dt>
   *       <dd>
   *         The number of occurrences after which the appointment's repeat cycle must stop.
   * This will be empty if the repeat cycle doesn't stop after a certain number of occurrences.
   *       </dd>
   * 
   *       <dt>int `i_period`</dt>
   *       <dd>The frequency of the appointment's repeat cycle.</dd>
   * 
   *       <dt>int `id_period`</dt>
   *       <dd>The measurement unit of <tt>i_period</tt>. One of the {@link ADurationSid} constants.</dd>
   * 
   *       <dt>bool `is_month`</dt>
   *       <dd>
   *         <tt>true</tt> if the appointment repeats monthly on the same date.
   * <tt>false</tt> if the appointment repeats monthly on the same day of the week.
   * <tt>null</tt> if the appointment doesn't repeat monthly.
   *       </dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `a_resource`</dt>
   *   <dd>
   *     A list of assets for the appointment booking.
   * Keys refer to asset categories.  Values refer to arrays with the next keys:
   * 
   * Specify this only for the appointment booking.
   *     <dl>
   *       <dt>int `i_index`</dt>
   *       <dd>The asset index on the layout. Specify this only if the asset category has a layout.</dd>
   * 
   *       <dt>string `k_resource`</dt>
   *       <dd>The asset. </dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `dt_date`</dt>
   *   <dd>The date/time for the booking in MySQL format in the location's time zone.</dd>
   * 
   *   <dt>int `i_duration`</dt>
   *   <dd>The duration of asset booking in minutes. Specify this for separate asset bookings only.</dd>
   * 
   *   <dt>int `i_index`</dt>
   *   <dd>
   *     The asset index on the layout.
   * Specify this for separate asset bookings only and for cases when the asset category only has a layout.
   *   </dd>
   * 
   *   <dt>int `id_class_tab`</dt>
   *   <dd>The booking service type. One of the {@link TabSid} constants.</dd>
   * 
   *   <dt>int `id_gender_staff`</dt>
   *   <dd>
   *     The gender of the staff member conducting the appointment. One of the {@link AGenderSid} constants.
   * Specify this for appointment bookings only.
   *   </dd>
   * 
   *   <dt>bool `is_wait_list_unpaid`</dt>
   *   <dd>If `true`, appointment waits unpaid.</dd>
   * 
   *   <dt>string `k_login_prize`</dt>
   *   <dd>The user's prize.
   * </dd>
   * 
   *   <dt>string `k_login_promotion`</dt>
   *   <dd>
   *     The user's pass (for example, a membership or a package).
   * Specify this if you want to set the pass to use to pay for the booking.
   * 
   *   </dd>
   * 
   *   <dt>string `k_resource`</dt>
   *   <dd>
   *     The asset booking. Specify this for separate asset bookings only.
   * 
   *   </dd>
   * 
   *   <dt>string `k_service`</dt>
   *   <dd>
   *     The appointment booking. Specify this for appointment bookings only.
   * 
   *   </dd>
   * 
   *   <dt>string `k_session_pass`</dt>
   *   <dd>The user's pass. </dd>
   * 
   *   <dt>string `k_staff`</dt>
   *   <dd>
   *     The staff member conducting the appointment.
   * Specify this for appointment bookings only.
   * 
   *   </dd>
   * 
   *   <dt>string `k_staff_date`</dt>
   *   <dd>
   *     The staff member conducting the appointment.
   * The difference between this an <var>k_staff</var> is that this value must be set only in cases
   * when you want to add a customer to an appointment that already exists.
   * Specify this for appointment bookings only.
   * 
   *   </dd>
   * </dl>
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
   * <dl>
   *   <dt>bool `is_mail`</dt>
   *   <dd>`true` to send mail; `false` to not send.</dd>
   * 
   *   <dt>bool `is_sms`</dt>
   *   <dd>`true` to send SMS; `false` to not send.</dd>
   * 
   *   <dt>bool `is_push`</dt>
   *   <dd>`true` to send push notification; `false` to not send.</dd>
   * </dl>
   * @get result
   * @post post
   * @var array
   */
  public $a_notification = [];

  /**
   * A list of payment sources to pay with.
   *
   * <dl>
   *   <dt>float `f_amount`</dt>
   *   <dd>Amount of money to withdraw with this payment source.</dd>
   * 
   *   <dt>int `id_pay_method`</dt>
   *   <dd>Payment method. One of {@link WlPayMethodSid} constants.</dd>
   * 
   *   <dt>bool `is_hide`</dt>
   *   <dd>Whether this payment method is hidden.
   *  </dd>
   * 
   *   <dt>bool `is_success`</dt>
   *   <dd>Whether this source was successfully charged.</dd>
   * 
   *   <dt>string `m_fee`</dt>
   *   <dd>Fee amount for this payment source.
   *   </dd>
   * 
   *   <dt>string `m_surcharge`</dt>
   *   <dd>Surcharge amount for this payment source.</dd>
   * 
   *   <dt>array `pa`</dt>
   *   <dd>
   *     Payer authentication data. Element may not present for payment sources that do not support payer authentication,
   *  or payer authentication is not implemented by this payment processor.
   * 
   *  This array is represented by
   *  <tt>namespace.Wl/Pay/Processor/ProcessorInterface/PayerAuthenticationForm.xml</tt>
   *  at browser side.
   * 
   *  Structure of the array:
   *     <dl>
   *       <dt>string `json_data`</dt>
   *       <dd>
   *         Additional payer authentication data.
   * 
   *  Copy of value set with
   *  <tt>Wl_Pay_Processor_ProcessorInterface_Abstract.paDataSet()</tt>.
   * 
   *  An empty string (or element not passed) if this payment processor does not provide additional payer
   *  authentication data, or payer authentication was not performed.
   *       </dd>
   * 
   *       <dt>string `m_amount`</dt>
   *       <dd>
   *         Authenticated payment amount.
   * 
   *  Copy of value set with
   *  <tt>Wl_Pay_Processor_ProcessorInterface_Abstract.paAmountSet()</tt>.
   * 
   *  An empty string (or element not passed) if payer authentication was not performed.
   *       </dd>
   * 
   *       <dt>string `k_pay_transaction`</dt>
   *       <dd>
   *         Key of the payment transaction that was created during payer authentication.
   *  In this case, payment transaction should be attached to this transaction.
   * 
   *  An empty string (or element not passed) if transaction was not created during payer authentication, or payer
   *  authentication was not executed.
   *       </dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `s_index`</dt>
   *   <dd>Index of this form. This corresponds the key this item is written in this array with.</dd>
   * </dl>
   * @post post
   * @var array[]
   */
  public $a_pay_form = [];

  /**
   * Data required for payment. Has next structure: 
   *
   * <dl>
   *   <dt>int `id_purchase_item`</dt>
   *   <dd>Type of the purchase item. One of the {@link WlPurchaseItemSid} constants.</dd>
   * </dl>
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
   * <dl>
   *   <dt>string[] `a_note`</dt>
   *   <dd>List of notes to add to user.</dd>
   * 
   *   <dt>string `text_mail`</dt>
   *   <dd>Mail.</dd>
   * 
   *   <dt>string `text_name_first`</dt>
   *   <dd>First name.</dd>
   * 
   *   <dt>string `text_name_last`</dt>
   *   <dd>Last name.</dd>
   * 
   *   <dt>string `text_phone`</dt>
   *   <dd>Phone.</dd>
   * </dl>
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
   * <dl>
   *   <dt>bool `is_free`</dt>
   *   <dd>`true` if the visit is free; `false` otherwise.</dd>
   * 
   *   <dt>bool `is_waitlist`</dt>
   *   <dd>`true` whether the booked slot was waitlisted; `false` otherwise.</dd>
   * 
   *   <dt>string `k_login_promotion`</dt>
   *   <dd>Applied user's purchase option. </dd>
   * 
   *   <dt>string `k_promotion`</dt>
   *   <dd>Purchase option. </dd>
   * 
   *   <dt>string `k_session_pass`</dt>
   *   <dd>Applied session pass. </dd>
   * 
   *   <dt>string `text_promotion`</dt>
   *   <dd>Purchase option title.</dd>
   * </dl>
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
   * The payment type ID for the service.
   *
   * One of the {@link WlAppointmentPaySid} constants.
   *
   * @post get
   * @var int
   *
   * @deprecated Payment type is calculated and verified automatically from booking data.
   *  The field is left for compatibility with old code and to control the new algorithm.
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
   * The sum paid without tax.
   *
   * Only used for the following types of purchases:
   * * {@link WlPurchaseItemSid::SERVICE}
   * * {@link WlPurchaseItemSid::RESOURCE}
   * * {@link WlPurchaseItemSid::RESOURCE_DEPOSIT}
   * * {@link WlPurchaseItemSid::APPOINTMENT_DEPOSIT}
   *
   * @post post
   * @var string
   *
   * @deprecated Paid amount is calculated and verified automatically from booking data.
   *  The field is left for compatibility with old code and to control the new algorithm.
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