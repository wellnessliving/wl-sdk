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
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;
use WellnessLiving\Wl\WlPayMethodSid;

/**
 * Pays for an appointment or appointment Purchase Option for a client.
 *
 * @method WlModelRequest post() Completes the appointment booking for one or more providers, optionally creating a new client.  Accepts booking details for one or more providers in {@link \Wl\Appointment\Book\Finish\FinishMultipleApi::$a_book_data},  processes payment using the selected Purchase Option, creates appointment records, and sends  booking confirmation notifications. A new client account can be created by supplying user  details in {@link \Wl\Appointment\Book\Finish\FinishMultipleApi::$a_user} when no UID is provided.
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
   * <dl>
   *   <dt>string `k_appointment`</dt>
   *   <dd>The appointment key. </dd>
   * </dl>
   * @post result
   * @var array[]
   */
  public $a_appointment = [];

  /**
   * All data required to book an appointment.
   *
   * <dl>
   *   <dt>int `id_class_tab`</dt>
   *   <dd>The booking service type. One of the {@link TabSid} constants.</dd>
   * 
   *   <dt>array[] `a_provider`</dt>
   *   <dd>
   *     A list of providers and their booking details. Every element has next keys:
   *     <dl>
   *       <dt>array[] `a_conflict`</dt>
   *       <dd>
   *         Information about booking conflicts. Keys are bookings dates/times in MySQL format in UTC. Values are arrays with next keys:
   *         <dl>
   *           <dt>string `dt_date_local`</dt>
   *           <dd>New appointment date/time in MySQL in locale timezone.</dd>
   * 
   *           <dt>int `i_duration`</dt>
   *           <dd>New asset booking duration.</dd>
   * 
   *           <dt>int `i_index`</dt>
   *           <dd>New asset index.</dd>
   * 
   *           <dt>int `id_conflict`</dt>
   *           <dd>Solution type.</dd>
   * 
   *           <dt>string `k_resource`</dt>
   *           <dd>New asset. </dd>
   * 
   *           <dt>string|null `k_staff`</dt>
   *           <dd>New staff member.  `null` in a case of asset booking.</dd>
   * 
   *           <dt>string|null `uid_staff`</dt>
   *           <dd>
   *             New staff member.  `null` in a case of asset booking.
   *           </dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>array `a_product`</dt>
   *       <dd>
   *         Add-ons to the appointment. Specified for appointment bookings only.
   * The old format used array keys.  While the new format has each element as an array:
   *         <dl>
   *           <dt>int `i_count`</dt>
   *           <dd>The add-on buy count.</dd>
   * 
   *           <dt>int `i_count_use`</dt>
   *           <dd>The add-on use count. If not set, then use count is equals to buy count.</dd>
   * 
   *           <dt>string `k_shop_product_option`</dt>
   *           <dd>The add-on key. </dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>array `a_repeat`</dt>
   *       <dd>
   *         Information for the recurring booking:
   * 
   * This will be empty if the appointment isn't booked recurringly.
   *         <dl>
   *           <dt>int[] `a_week`</dt>
   *           <dd>
   *             The days of the week when the appointment repeats. One of the constants of the {@link ADateWeekSid} class.
   * This will be empty if the appointment doesn't repeat weekly.
   *           </dd>
   * 
   *           <dt>string `dl_end`</dt>
   *           <dd>
   *             The date when the appointment's repeat cycle stops. This will be empty if the repeat cycle doesn't stop at a certain date.
   *           </dd>
   * 
   *           <dt>int `i_occurrence`</dt>
   *           <dd>
   *             The number of occurrences after which the appointment's repeat cycle stops.
   * This will be empty if the repeat cycle doesn't stop after a certain number of occurrences.
   *           </dd>
   * 
   *           <dt>int `i_period`</dt>
   *           <dd>The frequency at which the appointment repeats.</dd>
   * 
   *           <dt>int `id_period`</dt>
   *           <dd>The measurement unit of `i_period`. One of the {@link ADurationSid} constants.</dd>
   * 
   *           <dt>bool `is_month`</dt>
   *           <dd>
   *             <tt>true</tt> if the appointment repeats monthly on the same date.
   * <tt>false</tt> if the appointment repeats monthly on the same day of the week.
   * <tt>null</tt> if the appointment doesn't repeat monthly.
   *           </dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>array `a_resource`</dt>
   *       <dd>
   *         The list of assets for the appointment booking.
   * Keys refer to asset categories. Values are arrays with the next keys:
   * 
   * Specify this only for an appointment booking.
   *         <dl>
   *           <dt>int `i_index`</dt>
   *           <dd>The asset index on the layout. This is only specified if the asset category has a layout.</dd>
   * 
   *           <dt>string `k_resource`</dt>
   *           <dd>The asset. </dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>string `dt_date`</dt>
   *       <dd>The date/time for the booking in MySQL format in the location's time zone.</dd>
   * 
   *       <dt>int `i_duration`</dt>
   *       <dd>The duration for the asset booking in minutes. Specify this for separate asset bookings only.</dd>
   * 
   *       <dt>int `i_index`</dt>
   *       <dd>
   *         The asset index on the layout.
   * Specify this for separate asset bookings only and for cases when the asset category only has the layout.
   *       </dd>
   * 
   *       <dt>int `id_gender_staff`</dt>
   *       <dd>
   *         The gender of the staff member conducting the appointment. One of the {@link AGenderSid} constants.
   * Specify this for appointment bookings only.
   *       </dd>
   * 
   *       <dt>int `id_purchase_item`</dt>
   *       <dd>Type of the purchase item. One of the {@link WlPurchaseItemSid} constants.</dd>
   * 
   *       <dt>bool `is_unpaid_force`</dt>
   *       <dd>
   *         If `true`, the appointment is booked as unpaid. Otherwise, this will be `false` to select an available Purchase Option.
   *       </dd>
   * 
   *       <dt>bool `is_wait_list_unpaid`</dt>
   *       <dd>If `true`, appointment waits unpaid.</dd>
   * 
   *       <dt>string `k_login_prize`</dt>
   *       <dd>The user's prize.
   * </dd>
   * 
   *       <dt>string `k_login_promotion`</dt>
   *       <dd>
   *         The user's Purchase Option.
   * Specify this if you want to use a specific Purchase Option to pay for the booking.
   * 
   *       </dd>
   * 
   *       <dt>string `k_resource`</dt>
   *       <dd>
   *         The asset booking. Specify this for separate asset bookings only.
   * 
   *       </dd>
   * 
   *       <dt>string `k_service`</dt>
   *       <dd>
   *         The appointment booking. Specify this for appointment bookings only.
   * 
   *       </dd>
   * 
   *       <dt>string `k_session_pass`</dt>
   *       <dd>
   *         The user's pass (for example, a membership or a package).
   * Specify this if you want to set the pass to use to pay for the booking.
   * 
   *       </dd>
   * 
   *       <dt>string `k_staff`</dt>
   *       <dd>
   *         The staff member conducting the appointment.
   * Specify this for appointment bookings only.
   * deprecated Use <var>uid_staff</var>. Available for legacy allow-list only.
   * 
   *       </dd>
   * 
   *       <dt>string `uid_staff`</dt>
   *       <dd>
   *         The staff member conducting the appointment.
   * Specify this for appointment bookings only.
   * 
   *       </dd>
   * 
   *       <dt>string `k_staff_date`</dt>
   *       <dd>
   *         The staff member conducting the appointment.
   * The difference between this and <var>k_staff</var> is that this value must be set only in cases
   * when you want to add customer to an appointment that already exists.
   * Specify this for appointment bookings only.
   * 
   *       </dd>
   * 
   *       <dt>string `uid_staff_date`</dt>
   *       <dd>
   *         The staff member conducting the appointment.
   * The difference between this and <var>uid_staff</var> is that this value must be set only in cases
   * when you want to add customer to an appointment that already exists.
   * Specify this for appointment bookings only.
   * 
   *       </dd>
   * 
   *       <dt>string `m_tip_appointment`</dt>
   *       <dd>The amount of selected tips.</dd>
   * 
   *       <dt>string `k_timezone`</dt>
   *       <dd>The time zone key. This will be 'null' if the time zone used matches the time zone of the location.</dd>
   * 
   *       <dt>string `uid`</dt>
   *       <dd>
   *         User key. 
   * Specify only in a case of booking for a lof of different users.
   *       </dd>
   *     </dl>
   *   </dd>
   * </dl>
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
   * Data required for payment with the next structure:
   *
   * <dl>
   *   <dt>int `id_purchase_item`</dt>
   *   <dd>The purchase item type. One of the {@link WlPurchaseItemSid} constants.</dd>
   * 
   *   <dt>string `k_id`</dt>
   *   <dd>The promotion or appointment key, depending on <var>id_purchase_item</var> in this array.</dd>
   * 
   *   <dt>string `k_login_promotion`</dt>
   *   <dd>The login promotion key. </dd>
   * 
   *   <dt>string `text_discount_code`</dt>
   *   <dd>The discount code.</dd>
   * </dl>
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
   * <dl>
   *   <dt>string|string[] `a_note`</dt>
   *   <dd>The note or list of notes to add to the new user's profile.</dd>
   * 
   *   <dt>string `text_mail`</dt>
   *   <dd>The new user's email address.</dd>
   * 
   *   <dt>string `text_name_first`</dt>
   *   <dd>The new user's first name.</dd>
   * 
   *   <dt>string `text_name_last`</dt>
   *   <dd>The new user's last name.</dd>
   * 
   *   <dt>string `text_phone`</dt>
   *   <dd>The new user's mobile phone number.</dd>
   * </dl>
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
   * The mode type.
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