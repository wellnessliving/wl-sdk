<?php

namespace WellnessLiving\Wl\Appointment\Book\Finish;

use WellnessLiving\WlModelAbstract;

/**
 * Allows to pay an appointment or appointment purchase option for the client.
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
   * Booked appointments. Every element has key:
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
   * All data from the provider model <tt>Wl_Appointment_Book_ProviderModel</tt>:
   * <dl>
   *   <dt>
   *     array [<var>a_product</var>]
   *   </dt>
   *   <dd>
   *     Add-ons to appointment. Specify for appointment booking only.
   *     Old format: array keys - primary keys in {@link \RsShopProductOptionSql} table.
   *     New format: each element is an array:
   *       <dt>int <var>i_count</var></dt><dd>Add-on count</dd>
   *       <dt>string <var>k_shop_product_option</var></dt><dd>Key of add-on, primary key in {@link \RsShopProductOptionSql} table.</dd>
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
   *         Days of week when appointment must repeat. Constants of {@link \WellnessLiving\Core\a\ADateWeekSid} class.
   *         Empty if appointment must not repeat weekly.
   *       </dd>
   *       <dt>
   *         string [<var>dl_end</var>]
   *       </dt>
   *       <dd>
   *         Date when appointment repeat must stop. Empty if repeat must not stop at a certain date.
   *       </dd>
   *       <dt>
   *         int [<var>i_occurrence</var>]
   *       </dt>
   *       <dd>
   *         Number of occurrences after that appointment repeat must stop.
   *         Empty if repeat must not stop after a certain number of occurrences.
   *       </dd>
   *       <dt>
   *         int <var>i_period</var>
   *       </dt>
   *       <dd>
   *         Frequency of appointment repeating.
   *       </dd>
   *       <dt>
   *         int <var>id_period</var>
   *       </dt>
   *       <dd>
   *         Measurement unit of <tt>i_period</tt>. One of {@link \WellnessLiving\Core\a\ADurationSid} constants.
   *       </dd>
   *       <dt>
   *         bool [<var>is_month</var>]
   *       </dt>
   *       <dd>
   *         <tt>true</tt> if appointment must repeat monthly at the same date.
   *         <tt>false</tt> if appointment must repeat monthly at the same week day.
   *         <tt>null</tt> if appointment must not repeat monthly.
   *       </dd>
   *     </dl>
   *     Empty if appointment must not be booked recurring.
   *   </dd>
   *   <dt>
   *     array [<var>a_resource</var>]
   *   </dt>
   *   <dd>
   *     List of assets for appointment booking.
   *     Keys - asset categories; primary keys in {@link \RsResourceTypeSql} table. Values - arrays with next keys:
   *     <dl>
   *       <dt>int [<var>i_index</var>]</dt>
   *       <dd>Asset index on layout. Specify only if asset category has a layout.</dd>
   *       <dt>string <var>k_resource</var></dt>
   *       <dd>Asset.</dd>
   *     </dl>
   *     Specify only for appointment booking.
   *   </dd>
   *   <dt>
   *     string <var>dt_date</var>
   *   </dt>
   *   <dd>
   *     Date/time for booking in MySQL format. It location timezone.
   *   </dd>
   *   <dt>
   *     int [<var>i_duration</var>]
   *   </dt>
   *   <dd>
   *     Duration for asset booking in minutes. Specify for separate asset booking only.
   *   </dd>
   *   <dt>
   *     int [<var>i_index</var>]
   *   </dt>
   *   <dd>
   *     Asset index on layout.
   *     Specify for separate asset booking only and for a case when asset category has layout only.
   *   </dd>
   *   <dt>
   *     int <var>id_class_tab</var>
   *   </dt>
   *   <dd>
   *     Kind of booking service. One of {@link \WellnessLiving\Wl\Classes\Tab\TabSid} constants.
   *   </dd>
   *   <dt>
   *     int [<var>id_gender_staff</var>]
   *   </dt>
   *   <dd>
   *     Gender of staff member to conduct appointment. One of {@link \WellnessLiving\Core\a\AGenderSid} constants.
   *     Specify for appointment booking only.
   *   </dd>
   *   <dt>
   *     string [<var>k_login_promotion</var>]
   *   </dt>
   *   <dd>
   *     User's pass (membership, package).
   *     Specify if you want to set which user's pass (membership, package) book must be payed by.
   *   </dd>
   *   <dt>
   *     string [<var>k_resource</var>]
   *   </dt>
   *   <dd>
   *     Asset booking. Specify for separate asset booking only.
   *   </dd>
   *   <dt>
   *     string [<var>k_service</var>]
   *   </dt>
   *   <dd>
   *     Appointment booking. Specify for appointment booking only.
   *   </dd>
   *   <dt>
   *     string [<var>k_staff</var>]
   *   </dt>
   *   <dd>
   *     Staff member to conduct an appointment.
   *     Specify for appointment booking only.
   *   </dd>
   *   <dt>
   *     string [<var>k_staff_date</var>]
   *   </dt>
   *   <dd>
   *     Staff member to conduct an appointment.
   *     The difference from the <var>k_staff</var> is that this value must be set only in a case
   *     when you want to add customer to an exists appointment.
   *     Specify for appointment booking only.
   *   </dd>
   *   <dt>string [<var>m_tip_appointment</var>]</dt>
   *   <dd>Amount of selected tips.</dd>
   *   <dt>sting <var>k_timezone</var></dt>
   *   <dd>Key of timezone. 'null' if the time has come in the time zone of the location.</dd>
   * </dl>
   *
   * @post post
   * @var array
   */
  public $a_book_data = [];

  /**
   * IDs of activity of books are made.
   *
   * @post result
   * @var string[]
   */
  public $a_login_activity_visit;

  /**
   * A sum paid.
   *
   * @post post
   * @var array
   */
  public $a_paid = [];

  /**
   * Payment type for the appointment, one of {@link \WellnessLiving\Wl\Appointment\WlAppointmentPaySid} constants.
   *
   * @post get
   * @var array
   */
  public $a_pay = [];

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
   * Data required for payment. Has next structure:<dl>
   *   <dt>int <var>id_purchase_item</var></dt>
   *   <dd>Type of the purchase item. One of the {@link \WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid} constants.</dd>
   *   <dt>string <var>k_id</var></dt>
   *   <dd>Promotion key or appointment key. Depends on <var>id_purchase_item</var> of this array.</dd>
   *   <dt>string <var>k_login_promotion</var></dt>
   *   <dd>Login promotion key.</dd>
   *   <dt>string <var>text_discount_code</var></dt>
   *   <dd>Discount code.</dd>
   * </dl>
   *
   * @post post
   * @var array
   */
  public $a_payment_data = [];

  /**
   * Purchase items keys.
   * Empty if no purchases are made for appointment booking.
   *
   * @post post
   * @var string[]
   */
  public $a_purchase_item = [];

  /**
   * List of quiz response keys.
   * Key is quiz key.
   * Value is response key.
   *
   * @post post
   * @var array[]
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
   * Must contain keys:
   * <dl><dt>string[] <var>a_note</var></dt><dd>List of notes to add to user.</dd>
   * <dt>string <var>text_mail</var></dt><dd>Mail.</dd>
   * <dt>string <var>text_name_first</var></dt><dd>First name.</dd>
   * <dt>string <var>text_name_last</var></dt><dd>Last name.</dd>
   * <dt>string <var>text_phone</var></dt><dd>Mobile phone.</dd></dl>
   *
   * @post get
   * @var array
   */
  public $a_user = [];

  /**
   * IDs of visits.
   *
   * @post result
   * @var string[]
   */
  public $a_visit = [];

  /**
   * Mode type, one of {@link \WellnessLiving\Wl\Mode\ModeSid} constants.
   *
   * @post post
   * @var int
   */
  public $id_mode = 0;

  /**
   * Whether multiple appointments booked in back-to-back mode.
   *
   * @post post
   * @var bool
   */
  public $is_back_to_back = false;

  /**
   * `true` whether to try to make a test booking and rollback should be applied, `false` - otherwise.
   *
   * @post post
   * @var bool
   */
  public $is_try = false;

  /**
   * `true` if client is walk-in, otherwise `false`.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $is_walk_in = false;

  /**
   * Appointment key.
   * Specify to reschedule certain appointment.
   *
   * @post get
   * @var string
   */
  public $k_appointment = '0';

  /**
   * Business key.
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
   * User to get information for.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>