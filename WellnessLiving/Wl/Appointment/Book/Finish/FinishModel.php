<?php

namespace WellnessLiving\Wl\Appointment\Book\Finish;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that completes the booking process for a service.
 *
 * This endpoint can be used with an existing client by specifying their UID. It can also be used to create a new
 * client by specifying user details in {@link \WellnessLiving\Wl\Appointment\Book\Finish\FinishModel::$a_user} and omitting any UID.
 * This endpoint can be accessed anonymously without authentication, but only when creating clients.
 *
 * @deprecated Use {@link \WellnessLiving\Wl\Appointment\Book\Finish\Finish47Model} instead.
 */
class FinishModel extends WlModelAbstract
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
   * Every element has the next key:
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
  public $a_appointment;

  /**
   * All data from the provider model <tt>Wl_Appointment_Book_ProviderModel</tt>:
   * <dl>
   *   <dt>
   *     array [<var>a_product</var>]
   *   </dt>
   *   <dd>
   *     Add-ons to the appointment. Specify this for appointment bookings only.
   *     Old format: array keys refer to primary keys.
   *     New format: each element is an array:
   *       <dt>int <var>i_count</var></dt><dd>The add-on count</dd>
   *       <dt>string <var>k_shop_product_option</var></dt><dd>The key of add-on.</dd>
   *   </dd>
   *   <dt>
   *     array [<var>a_repeat</var>]
   *   </dt>
   *   <dd>
   *     Recurring booking information:
   *     <dl>
   *       <dt>
   *         int[] [<var>a_week</var>]
   *       </dt>
   *       <dd>
   *         The days of week when appointment repeats. One of the {@link ADateWeekSid} constants.
   *         This will be empty if the appointment doesn't repeat weekly.
   *       </dd>
   *       <dt>
   *         string [<var>dl_end</var>]
   *       </dt>
   *       <dd>
   *         The date when the appointment's repeat cycle stops. This will be empty if the repeat cycle doesn't stop at a certain date.
   *       </dd>
   *       <dt>
   *         int [<var>i_occurrence</var>]
   *       </dt>
   *       <dd>
   *         The number of occurrences after which the appointment's repeat cycle must stop.
   *         This will be empty if the repeat cycle doesn't stop after a certain number of occurrences.
   *       </dd>
   *       <dt>
   *         int <var>i_period</var>
   *       </dt>
   *       <dd>
   *         The frequency of the appointment's repeat cycle.
   *       </dd>
   *       <dt>
   *         int <var>id_period</var>
   *       </dt>
   *       <dd>
   *         The measurement unit of <tt>i_period</tt>. One of the {@link ADurationSid} constants.
   *       </dd>
   *       <dt>
   *         bool [<var>is_month</var>]
   *       </dt>
   *       <dd>
   *         <tt>true</tt> if the appointment repeats monthly on the same date.
   *         <tt>false</tt> if the appointment repeats monthly on the same day of the week.
   *         <tt>null</tt> if the appointment doesn't repeat monthly.
   *       </dd>
   *     </dl>
   *     This will be empty if the appointment isn't recurring.
   *   </dd>
   *   <dt>
   *     array [<var>a_resource</var>]
   *   </dt>
   *   <dd>
   *     A list of assets for the appointment booking.
   *     Keys refer to asset categories. Values refer to arrays with the next keys:
   *     <dl>
   *       <dt>int [<var>i_index</var>]</dt>
   *       <dd>The asset index on the layout. Specify this only if the asset category has a layout.</dd>
   *       <dt>string <var>k_resource</var></dt>
   *       <dd>The asset.</dd>
   *     </dl>
   *     Specify this only for the appointment booking.
   *   </dd>
   *   <dt>
   *     string <var>dt_date</var>
   *   </dt>
   *   <dd>
   *     The date/time for the booking in MySQL format in the location's time zone.
   *   </dd>
   *   <dt>
   *     int [<var>i_duration</var>]
   *   </dt>
   *   <dd>
   *     The duration of asset booking in minutes. Specify this for separate asset bookings only.
   *   </dd>
   *   <dt>
   *     int [<var>i_index</var>]
   *   </dt>
   *   <dd>
   *     The asset index on the layout.
   *     Specify this for separate asset bookings only and for cases when the asset category only has a layout.
   *   </dd>
   *   <dt>
   *     int <var>id_class_tab</var>
   *   </dt>
   *   <dd>
   *     The booking service type. One of the {@link TabSid} constants.
   *   </dd>
   *   <dt>
   *     int [<var>id_gender_staff</var>]
   *   </dt>
   *   <dd>
   *     The gender of the staff member conducting the appointment. One of the {@link \WellnessLiving\Core\a\AGenderSid} constants.
   *     Specify this for appointment bookings only.
   *   </dd>
   *   <dt>
   *     string [<var>k_login_promotion</var>]
   *   </dt>
   *   <dd>
   *     The user's pass (for example, a membership or a package).
   *     Specify this if you want to set the pass to use to pay for the booking.
   *   </dd>
   *   <dt>
   *     string [<var>k_resource</var>]
   *   </dt>
   *   <dd>
   *     The asset booking. Specify this for separate asset bookings only.
   *   </dd>
   *   <dt>
   *     string [<var>k_service</var>]
   *   </dt>
   *   <dd>
   *     The appointment booking. Specify this for appointment bookings only.
   *   </dd>
   *   <dt>
   *     string [<var>k_staff</var>]
   *   </dt>
   *   <dd>
   *     The staff member conducting the appointment.
   *     Specify this for appointment bookings only.
   *   </dd>
   *   <dt>
   *     string [<var>k_staff_date</var>]
   *   </dt>
   *   <dd>
   *     The staff member conducting the appointment.
   *     The difference between this an <var>k_staff</var> is that this value must be set only in cases
   *     when you want to add a customer to an appointment that already exists.
   *     Specify this for appointment bookings only.
   *   </dd>
   *   <dt>string [<var>m_tip_appointment</var>]</dt>
   *   <dd>The amount of selected tips.</dd>
   * </dl>
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
   * A list of payment sources to pay with.
   *
   * @post post
   * @var array[]
   */
  public $a_pay_form = [];

  /**
   * Data required for payment with the following structure:<dl>
   *   <dt>int <var>id_purchase_item</var></dt>
   *   <dd>The type of the purchase item. One of the {@link WlPurchaseItemSid} constants.</dd>
   *   <dt>string <var>k_id</var></dt>
   *   <dd>The promotion key or appointment key, which depends on <var>id_purchase_item</var> of this array.</dd>
   *   <dt>string <var>k_login_promotion</var></dt>
   *   <dd>The login promotion key.</dd>
   *   <dt>string <var>k_session_pass</var></dt>
   *   <dd>The session pass key.</dd>
   *   <dt>string <var>text_discount_code</var></dt>
   *   <dd>The discount code.</dd>
   * </dl>
   *
   * @post post
   * @var array
   */
  public $a_payment_data = [];

  /**
   * The purchase item keys.
   * This will be empty if no purchases are made for the appointment booking.
   *
   * @post post
   * @var string[]
   */
  public $a_purchase_item = [];

  /**
   * A list of quiz response keys.
   * Keys refer to quiz keys.
   * Values refer to response keys.
   *
   * @post post
   * @var array
   */
  public $a_quiz_response = [];

  /**
   * A list of user keys to book appointments with.
   * Empty values represent walk-ins.
   *
   * @get get
   * @post get
   * @var string[]
   */
  public $a_uid = [];

  /**
   * Data used to create a new user.
   * Specify this if <var>$uid</var> is empty.
   * This must contain the following keys:
   * <dl>
   *   <dt>string[] <var>a_note</var></dt>
   *   <dd>A list of notes to add for the user.</dd>
   *   <dt>string <var>text_mail</var></dt>
   *   <dd>The user's email address.</dd>
   *   <dt>string <var>text_name_first</var></dt>
   *   <dd>The user's first name.</dd>
   *   <dt>string <var>text_name_last</var></dt>
   *   <dd>The user's last name.</dd>
   *   <dt>string <var>text_phone</var></dt>
   *   <dd>The user's phone number.</dd>
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
  public $a_visit;

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
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * The location key.
   *
   * @get get,result
   * @post get
   * @var string
   */
  public $k_location = '0';

  /**
   * Key of time zone.
   *
   * This will be `null` if not set yet. In these cases, the client's default time zone from {@link Wl\Profile\Timezone\ProfileTimezone::createInBusiness()}
   * will be used.
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
   * The wizard's unique identifier.
   *
   * @post post
   * @var string
   */
  public $s_id = '';

  /**
   * The user key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>