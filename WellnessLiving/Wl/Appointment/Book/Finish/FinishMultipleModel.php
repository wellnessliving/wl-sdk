<?php

namespace WellnessLiving\Wl\Appointment\Book\Finish;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that pays for an appointment or appointment Purchase Option for a client.
 */
class FinishMultipleModel extends WlModelAbstract
{
  /**
   * A list of answers for the questions.
   *
   * @post post
   * @var array
   */
  public $a_answer = [];

  /**
   * The booked appointments. Every element has the key:
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
  public $a_appointment = [];

  /**
   * All data from the provider model `Wl_Appointment_Book_ProviderModel`:
   * <dl>
   *   <dt>
   *     array [<var>a_product</var>]
   *   </dt>
   *   <dd>
   *     Add-ons to the appointment. Specified for appointment bookings only.
   *     The old format used array keys, while the new new format has each element as an array:
   *       <dl><dt>int <var>i_count</var></dt><dd>The add-on count.</dd>
   *       <dt>string <var>k_shop_product_option</var></dt><dd>The add-on key.</dd></dl>
   *   </dd>
   *   <dt>
   *     array [<var>a_repeat</var>]
   *   </dt>
   *   <dd>
   *     Information for the recurring booking:
   *     <dl>
   *       <dt>
   *         int[] [<var>a_week</var>]
   *       </dt>
   *       <dd>
   *         The days of the week when the appointment repeats. One of the constants of the {@link \WellnessLiving\Core\a\ADateWeekSid} class.
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
   *         The number of occurrences after which the appointment's repeat cycle stops.
   *         This will be empty if the repeat cycle doesn't stop after a certain number of occurrences.
   *       </dd>
   *       <dt>
   *         int <var>i_period</var>
   *       </dt>
   *       <dd>
   *         The frequency at which the appointment repeats.
   *       </dd>
   *       <dt>
   *         int <var>id_period</var>
   *       </dt>
   *       <dd>
   *         The measurement unit of `i_period`. One of the {@link \WellnessLiving\Core\a\ADurationSid} constants.
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
   *     This will be empty if the appointment isn't booked recurringly.
   *   </dd>
   *   <dt>
   *     array [<var>a_resource</var>]
   *   </dt>
   *   <dd>
   *     The list of assets for the appointment booking.
   *     Keys refer to asset categories. Values are arrays with the next keys:
   *     <dl>
   *       <dt>int [<var>i_index</var>]</dt>
   *       <dd>The asset index on the layout. This is only specified if the asset category has a layout.</dd>
   *       <dt>string <var>k_resource</var></dt>
   *       <dd>The asset.</dd>
   *     </dl>
   *     Specify this only for an appointment booking.
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
   *     The duration for the asset booking in minutes. Specify this for separate asset bookings only.
   *   </dd>
   *   <dt>
   *     int [<var>i_index</var>]
   *   </dt>
   *   <dd>
   *     The asset index on the layout.
   *     Specify this for separate asset bookings only and for cases when the asset category only has the layout.
   *   </dd>
   *   <dt>
   *     int <var>id_class_tab</var>
   *   </dt>
   *   <dd>
   *     The booking service type. One of the {@link \WellnessLiving\Wl\Classes\Tab\TabSid} constants.
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
   *     The user's Purchase Option.
   *     Specify this if you want to use a specific Purchase Option to pay for the booking.
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
   *     The difference between this and <var>k_staff</var> is that this value must be set only in cases
   *     when you want to add customer to an appointment that already exists.
   *     Specify this for appointment bookings only.
   *   </dd>
   *   <dt>string [<var>m_tip_appointment</var>]</dt>
   *   <dd>The amount of selected tips.</dd>
   *   <dt>sting <var>k_timezone</var></dt>
   *   <dd>The time zone key. This will be 'null' if the time zone used matches the time zone of the location.</dd>
   * </dl>
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
   * The sum paid.
   *
   * @post post
   * @var array
   */
  public $a_paid = [];

  /**
   * The payment type for the appointment. One of the {@link \WellnessLiving\Wl\Appointment\WlAppointmentPaySid} constants.
   *
   * @post get
   * @var array
   */
  public $a_pay = [];

  /**
   * A list of payment sources to pay with.
   *
   * The structure of this array corresponds with the structure of {@link RsPayForm::$a_pay_source}.
   *
   * @post post
   * @var array[]
   */
  public $a_pay_form = [];

  /**
   * Data required for payment with the next structure:<dl>
   *   <dt>int <var>id_purchase_item</var></dt>
   *   <dd>The purchase item type. One of the {@link \WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid} constants.</dd>
   *   <dt>string <var>k_id</var></dt>
   *   <dd>The promotion or appointment key, depending on <var>id_purchase_item</var> in this array.</dd>
   *   <dt>string <var>k_login_promotion</var></dt>
   *   <dd>The login promotion key.</dd>
   *   <dt>string <var>text_discount_code</var></dt>
   *   <dd>The discount code.</dd>
   * </dl>
   *
   * @post post
   * @var array
   */
  public $a_payment_data = [];

  /**
   * The purchase items keys.
   * This will be empty if no purchases have been made for the appointment booking.
   *
   * @post post
   * @var string[]
   */
  public $a_purchase_item = [];

  /**
   * The list of quiz response keys.
   * Keys refer to quiz keys, and values refer to response keys.
   *
   * @post post
   * @var array[]
   */
  public $a_quiz_response = [];

  /**
   * The list of user keys to book appointments with.
   * Empty values in this list signify walk-ins.
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
   * <dl><dt>string[] <var>a_note</var></dt><dd>The list of notes to add to the new user's profile.</dd>
   * <dt>string <var>text_mail</var></dt><dd>The new user's email address.</dd>
   * <dt>string <var>text_name_first</var></dt><dd>The new user's first name.</dd>
   * <dt>string <var>text_name_last</var></dt><dd>The new user's last name.</dd>
   * <dt>string <var>text_phone</var></dt><dd>The new user's mobile phone number.</dd></dl>
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
   * The mode type. One of the {@link \WellnessLiving\Wl\Mode\ModeSid} constants.
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
   * This will be `true` when trying to make a test booking and rollback should be applied. Otherwise, this will be `false`.
   *
   * @post post
   * @var bool
   */
  public $is_try = false;

  /**
   * This will be `true` if the client is walk-in. Otherwise, this will be `false`.
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
   * The location to show the available appointment booking schedule for.
   *
   * @get get,result
   * @post get
   * @var string
   */
  public $k_location = '0';

  /**
   * The unique identifier of the wizard.
   *
   * @post post
   * @var string
   */
  public $s_id = '';

  /**
   * The user to get information for.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>