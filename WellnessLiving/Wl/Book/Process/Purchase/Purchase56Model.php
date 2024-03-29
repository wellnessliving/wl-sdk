<?php

namespace WellnessLiving\Wl\Book\Process\Purchase;

use WellnessLiving\Core\a\ADateWeekSid;
use WellnessLiving\Core\a\ADurationSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;
use WellnessLiving\Wl\WlProgramCategorySid;
use WellnessLiving\Wl\WlProgramSid;
use WellnessLiving\Wl\WlProgramTypeSid;

/**
 * An endpoint that displays information about Purchase Options that can book specified session(s).
 *
 * Note that the terms "Purchase Option" and "promotion" are used interchangeably.
 */
class Purchase56Model extends WlModelAbstract
{
  /**
   * A list of the client`s login promotions that can be applied to a given service.
   * <dl>
   *   <dt>array <var>a_login_promotion_info</var></dt>
   *   <dd>
   *      Information about the Purchase Option with the following information:
   *      <dl>
   *        <dt>int <var>i_limit</var></dt>
   *        <dd>The number of visits the Purchase Option allows the client to make.</dd>
   *        <dt>int|null <var>i_limit_duration</var></dt>
   *        <dd>The maximum number of minutes the Purchase Option can be used for.</dd>
   *        <dt>int <var>i_remain</var></dt>
   *        <dd>The number of the remaining visits the Purchase Option has left.</dd>
   *        <dt>int|null <var>i_remain_duration</var></dt>
   *        <dd>The number of minutes left in the Purchase Option.</dd>
   *      </dl>
   *   </dd>
   *   <dt>string[] <var>a_visit_limit</var></dt>
   *   <dd>The list of calendar restrictions of the promotion (for example, 4 per week).</dd>
   *   <dt>array <var>a_restrict</var></dt>
   *   <dd>Data about the shortest restriction period:
   *     <dl>
   *       <dt>int <var>i_limit</var></dt>
   *       <dd>The limit of visits for the shortest restriction period.</dd>
   *       <dt>int <var>i_remain</var></dt>
   *       <dd>The number of remaining visits for the shortest restriction period.</dd>
   *       <dt>string <var>text_restriction</var></dt>
   *       <dd>The description of the shortest restriction period (for example "this week" or "for a 4 day period").</dd>
   *     </dl>
   *   </dd>
   *   <dt>array[] <var>a_restrict_data</var></dt>
   *   <dd>Data about all restriction periods given as an array, where each record has the following structure:
   *     <dl>
   *       <dt>int <var>i_book</var></dt>
   *       <dd>The number of future sessions paid using this Purchase Option.</dd>
   *       <dt>int <var>i_limit</var></dt>
   *       <dd>The limit of visits for the restriction period.</dd>
   *       <dt>int <var>i_remain</var></dt>
   *       <dd>The number of remaining visits for the restriction period.</dd>
   *       <dt>int <var>i_use</var></dt>
   *       <dd>The Purchase Option's usage count.</dd>
   *       <dt>int <var>i_visit_past</var></dt>
   *       <dd>
   *         The number of attended sessions before the last renewal.
   *         This will be `0` if there aren't any sessions before the last renewal or the Purchase Option doesn't auto-renew.
   *       </dd>
   *       <dt>string <var>text_restriction</var></dt>
   *       <dd>The description of restriction period (for example "this week" or "for a 4 day period").</dd>
   *     </dl>
   *   </dd>
   *   <dt>int <var>i_limit</var></dt>
   *   <dd>The number of visits the Purchase Option allows the client to make.</dd>
   *   <dt>int|null <var>i_limit_duration</var></dt>
   *   <dd>The maximum number of minutes the Purchase Option can be used for.</dd>
   *   <dt>int <var>id_program</var></dt>
   *   <dd>The program ID for Purchase Options. One of the {@link WlProgramSid} constants.</dd>
   *   <dt>string <var>k_login_promotion</var></dt>
   *   <dd>The login promotion key.</dd>
   *   <dt>string <var>s_class_include</var></dt>
   *   <dd>The list of services provided by this Purchase Option.</dd>
   *   <dt>string <var>s_description</var></dt>
   *   <dd>The Purchase Option description.</dd>
   *   <dt>string <var>s_duration</var></dt>
   *   <dd>The Purchase Option duration.</dd>
   *   <dt>string <var>s_title</var></dt>
   *   <dd>The Purchase Option name.</dd>
   *   <dt>string <var>text_package_item</var></dt>
   *   <dd>If this promotion is a package, this field will contain a list of Purchase Options contained in the package.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_login_promotion = [];

  /**
   * A list of Purchase Options that are available for the session(s) being booked. Keys refer to unique string IDs, and
   * values refer arrays with the next keys:
   * <dl>
   *   <dt>
   *     array[] <var>a_installment_template</var>.
   *   </dt>
   *   <dd>
   *     A list of installment plans. Every element has the next keys:
   *     <dl>
   *       <dt>
   *         int <var>i_count</var>
   *       </dt>
   *       <dd>
   *          The number of payments.
   *       </dd>
   *       <dt>
   *         int <var>id_duration</var>
   *       </dt>
   *       <dd>
   *          The duration of a single period. One of the {@link ADurationSid} constants.
   *       </dd>
   *       <dt>
   *         int <var>i_period</var>
   *       </dt>
   *       <dd>
   *          The number of periods specified by <var>id_period</var> between individual payments.
   *       </dd>
   *       <dt>
   *         string <var>k_currency</var>
   *       </dt>
   *       <dd>
   *         The payment currency key.
   *       </dd>
   *       <dt>
   *         string <var>k_pay_installment_template</var>
   *       </dt>
   *       <dd>
   *          The key of the installment plan template.
   *       </dd>
   *       <dt>
   *         string <var>m_amount</var>
   *       </dt>
   *       <dd>
   *         The amount of the installment plan.
   *       </dd>
   *       <dt>
   *         string <var>s_duration</var>
   *       </dt>
   *       <dd>
   *         The title of the installment plan.
   *       </dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     array[] [<var>a_visit_limit</var>]
   *   </dt>
   *   <dd>
   *     This is only set for Purchase Options. A list of limits on booking by the Purchase Option. Every element has the next keys:
   *     <dl>
   *       <dt>
   *         string <var>s_title</var>
   *       </dt>
   *       <dd>
   *         The limit description.
   *       </dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     string <var>f_price</var>
   *   </dt>
   *   <dd>
   *     The price.
   *   </dd>
   *   <dt>
   *     string [<var>f_price_early</var>]
   *   </dt>
   *   <dd>
   *     The price for early bookings.
   *   </dd>
   *   <dt>
   *     string <var>html_payment_period</var>
   *   </dt>
   *   <dd>
   *     This is only set for Purchase Options with the 'membership' program type. The measurement unit of <var>i_payment_period</var> in short form.
   *   </dd>
   *   <dt>
   *     string <var>html_description</var>
   *   </dt>
   *   <dd>
   *     The description, ready to paste in a browser.
   *   </dd>
   *   <dt>
   *     int [<var>i_limit</var>]
   *   </dt>
   *   <dd>
   *     The limit of sessions that can be booked by Purchase Options.
   *   </dd>
   *   <dt>
   *     int [<var>i_payment_period</var>]
   *   </dt>
   *   <dd>
   *     This is only set for Purchase Options with the 'membership' program type. The duration of the regular payment interval.
   *   </dd>
   *   <dt>
   *     int [<var>i_session</var>]
   *   </dt>
   *   <dd>
   *     This is only set for purchases of single sessions. The number of sessions booked simultaneously.
   *   </dd>
   *   <dt>
   *     int [<var>id_program_category</var>]
   *   </dt>
   *   <dd>
   *     This is only set for promotions. The ID of the promotion program category. One of the {@link WlProgramCategorySid} constants.
   *   </dd>
   *   <dt>
   *     int [<var>id_program_type</var>]
   *   </dt>
   *   <dd>
   *     This is only set for promotions. The ID of the promotion program type. One of the {@link WlProgramTypeSid} constants.
   *   </dd>
   *   <dt>
   *     int <var>id_purchase_item</var>
   *   </dt>
   *   <dd>
   *     The ID of Purchase Option type. One of the {@link WlPurchaseItemSid} constants.
   *   </dd>
   *   <dt>
   *     bool [<var>is_contract</var>]
   *   </dt>
   *   <dd>
   *     If <tt>true</tt>, the Purchase Option requires a contract assignment. Otherwise, this will be <tt>false</tt>.
   *   </dd>
   *   <dt>
   *     bool [<var>is_convert</var>]
   *   </dt>
   *   <dd>
   *     If <tt>true</tt>, the Purchase Option converts to another instance upon expiration. Otherwise, this will be <tt>false</tt>.
   *   </dd>
   *   <dt>
   *     bool [<var>is_renew</var>]
   *   </dt>
   *   <dd>
   *     If <tt>true</tt>, the Purchase Option is renewable. Otherwise, this will be <tt>false</tt>.
   *   </dd>
   *   <dt>
   *     bool [<var>is_renew_check</var>]
   *   </dt>
   *   <dd>
   *     If <tt>true</tt>, the Purchase Option is renewable and the "auto-renew" option is turned on by default. Otherwise,
   *     this will be <tt>false</tt>.
   *   </dd>
   *   <dt>
   *     string <var>k_id</var>
   *   </dt>
   *   <dd>
   *     The key of the Purchase Option in the database. The table depends on <var>id_purchase_item</var>.
   *   </dd>
   *   <dt>
   *     string [<var>k_login_prize</var>]
   *   </dt>
   *   <dd>
   *     The key of the user's prize that can be used instead a Purchase Option to book the session.
   *   </dd>
   *   <dt>
   *     string [<var>s_contract</var>]
   *   </dt>
   *   <dd>
   *     The contract of the Purchase Option. This is only set if <var>is_contract</var> is <tt>true</tt>.
   *   </dd>
   *   <dt>
   *     string [<var>s_payment_duration</var>]
   *   </dt>
   *   <dd>
   *     This is only set for Purchase Options with the 'membership' program type. The measurement unit of <var>i_payment_period</var>.
   *   </dd>
   *   <dt>
   *     string [<var>s_promotion_convert</var>]
   *   </dt>
   *   <dd>
   *     This is only set if <var>is_convert</var> is <tt>true</tt>. The title to use for the new Purchase Option instance upon auto-renewal.
   *   </dd>
   *   <dt>
   *     string <var>s_title</var>
   *   </dt>
   *   <dd>
   *     The title.
   *   </dd>
   *   <dt>
   *     string <var>s_value</var>
   *   </dt>
   *   <dd>
   *     The unique identifier.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_purchase = [];

  /**
   * Information about the recurring booking:
   * <dl>
   *   <dt>
   *     int[] [<var>a_week</var>]
   *   </dt>
   *   <dd>
   *     The days of week when the appointment repeat. One of the {@link ADateWeekSid} constants.
   *     This will be empty if the appointment doesn't repeat weekly.
   *   </dd>
   *   <dt>
   *     string [<var>dl_end</var>]
   *   </dt>
   *   <dd>
   *     The date when the appointment's repeat cycle stops. This will be empty if the repeat cycle doesn't stop at a certain date.
   *   </dd>
   *   <dt>
   *     int [<var>i_occurrence</var>]
   *   </dt>
   *   <dd>
   *     The number of occurrences after which the appointment's repeat cycle stops.
   *     This will be empty if the repeat cycle doesn't stop after a certain number of occurrences.
   *   </dd>
   *   <dt>
   *     int <var>i_period</var>
   *   </dt>
   *   <dd>
   *     The frequency of the appointment's repeat cycle.
   *   </dd>
   *   <dt>
   *     int <var>id_period</var>
   *   </dt>
   *   <dd>
   *     The measurement unit of `i_period`. One of the {@link ADurationSid} constants.
   *   </dd>
   *   <dt>
   *     bool [<var>is_month</var>]
   *   </dt>
   *   <dd>
   *     <tt>true</tt> - the appointment repeats monthly on the same date.
   *     <tt>false</tt> - the appointment repeats monthly on the same day of the week.
   *     <tt>null</tt> - the appointment doesn't repeat monthly.
   *   </dd>
   * </dl>
   *
   * This will be `null` if the booking isn't recurring.
   *
   * @post post
   * @var array|null
   */
  public $a_repeat = null;

  /**
   * The list of sessions being booked.
   *
   * Keys refer to class period keys.
   * And values refer to the List of dates/times when the session occurred.
   *
   * @get get
   * @var array
   */
  public $a_session = [];

  /**
   * The list of session passes that might be used in booking process.
   *
   * @get result
   * @var array
   * @see PurchaseModel::_getSessionPassList()
   */
  public $a_session_pass = [];

  /**
   * The selected sessions on the wait list that are unpaid.
   *
   * Keys refer to session IDs.
   * And values refer to the index arrays of dates/times when the session occurred (returned in MySQL format and GMT).
   *
   * @get get
   * @var array
   */
  public $a_session_wait_list_unpaid = [];

  /**
   * Determines whether the class/event can be booked at this step or not.
   * This is an external process control flag.
   *
   * @post post
   * @var bool
   */
  public $can_book = true;

  /**
   * `true` if application can be book unpaid visits no matter what are the business settings.
   * `false` if ability to book unpaid should fully depend on the business settings.
   *
   * @var bool
   */
  public $can_book_unpaid = false;

  /**
   * Date/time to which session is booked.
   *
   * @get get
   * @post get
   * @var string
   */
  public $dt_date_gmt = '';

  /**
   * The image height in pixels. Specify this value if you need image to be returned in specific size.
   * The returned image will have the default thumbnail size if this value isn't specified.
   *
   * @get get
   * @var int
   */
  public $i_image_height = 0;

  /**
   * The image width in pixels. Specify this value if you need image to be returned in specific size.
   * The returned image will have the default thumbnail size if this value isn't specified.
   *
   * @get get
   * @var int
   */
  public $i_image_width = 0;

  /**
   * The mode type. One of the {@link \WellnessLiving\Wl\Mode\ModeSid} constants.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_mode = 0;

  /**
   * Determines if the client must authorize the credit card.
   *
   * @get get
   * @var bool
   */
  public $is_card_authorize = false;

  /**
   * `true` if user pressed 'Pay later'.
   * `false` if user pressed 'Pay now'.
   *
   * @post post
   * @var bool
   */
  public $is_force_pay_later = false;

  /**
   * Indicates if the drop-in rate should be the default promotion.
   *
   * @get result
   * @var bool
   */
  public $is_single_default = false;

  /**
   * The selected sessions.
   * This won't be empty for session mode only.
   *
   * Fields refer to IDs of sessions in the database. Values refer to arrays of dates/times when session occurred, returned in MySQL format and in GMT.
   *
   * Serialized with JSON.
   *
   * @get get
   * @var string
   */
  public $json_session = '';

  /**
   * The business key.
   *
   * `null` if business key was not passed.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Key of session which is booked.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_class_period = '0';

  /**
   * Login promotion to be used to book a class.
   *
   * @post post
   * @var string
   */
  public $k_login_promotion = '';

  /**
   * The default Purchase Option key.
   * This will be empty if the class has no default Purchase Option.
   *
   * @get result
   * @var string
   */
  public $k_promotion_default = '';

  /**
   * Session pass to be used to book a class.
   *
   * @post post
   * @var string
   */
  public $k_session_pass = '';

  /**
   * Key of a user who is making a book.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>