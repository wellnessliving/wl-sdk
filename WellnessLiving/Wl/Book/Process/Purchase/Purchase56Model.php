<?php

namespace WellnessLiving\Wl\Book\Process\Purchase;

use WellnessLiving\WlModelAbstract;

/**
 * Displays information about Purchase Options that can book specified session(s).
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
   *      Information about the promotion. It contains the following information:
   *      <dl>
   *        <dt>int <var>i_limit</var></dt>
   *        <dd>The count of visits that the promotion allows the client to make.</dd>
   *        <dt>int|null <var>i_limit_duration</var></dt>
   *        <dd>The maximum number of minutes that the current promotion can be used for.</dd>
   *        <dt>int <var>i_remain</var></dt>
   *        <dd>The count of the remaining visits.</dd>
   *        <dt>int|null <var>i_remain_duration</var></dt>
   *        <dd>The number of minutes left in this promotion.</dd>
   *      </dl>
   *   </dd>
   *   <dt>string[] <var>a_visit_limit</var></dt>
   *   <dd>The list of calendar restrictions of the promotion (for example, 4 per week).</dd>
   *   <dt>array <var>a_restrict</var></dt>
   *   <dd>The data about the shortest restriction period:
   *     <dl>
   *       <dt>int <var>i_limit</var></dt>
   *       <dd>The limit of visits for the shortest restriction period.</dd>
   *       <dt>int <var>i_remain</var></dt>
   *       <dd>The number of remaining visits for the shortest restriction period.</dd>
   *       <dt>string <var>text_restriction</var></dt>
   *       <dd>The description of the shortest restriction period. For example, "this week" or "for a 4-day period".</dd>
   *     </dl>
   *   </dd>
   *   <dt>array[] <var>a_restrict_data</var></dt>
   *   <dd>Data for all restriction periods given as an array, where each record has the following structure:
   *     <dl>
   *       <dt>int <var>i_book</var></dt>
   *       <dd>The count of future sessions paid with this promotion.</dd>
   *       <dt>int <var>i_limit</var></dt>
   *       <dd>The limit of visits for the restriction period.</dd>
   *       <dt>int <var>i_remain</var></dt>
   *       <dd>The number of remaining visits for the restriction period.</dd>
   *       <dt>int <var>i_use</var></dt>
   *       <dd>The promotion's usage count.</dd>
   *       <dt>int <var>i_visit_past</var></dt>
   *       <dd>
   *         The count of attended sessions before the last renewal.
   *         If `0`, there weren't any sessions before the last renewal or the promotion doesn't auto-renew.
   *       </dd>
   *       <dt>string <var>text_restriction</var></dt>
   *       <dd>The description of the restriction period. For example, "this week" or "for a 4-day period".</dd>
   *     </dl>
   *   </dd>
   *   <dt>int <var>i_limit</var></dt>
   *   <dd>The number of visits the promotion allows the client to make.</dd>
   *   <dt>int|null <var>i_limit_duration</var></dt>
   *   <dd>The maximum number of minutes the current promotion can be used for.</dd>
   *   <dt>int <var>id_program</var></dt>
   *   <dd>The program ID for promotions. One of the {@link \WellnessLiving\WlProgramSid} constants.</dd>
   *   <dt>string <var>k_login_promotion</var></dt>
   *   <dd>The login promotion key.</dd>
   *   <dt>string <var>s_class_include</var></dt>
   *   <dd>The list of services provided by this promotion.</dd>
   *   <dt>string <var>s_description</var></dt>
   *   <dd>The promotion's description.</dd>
   *   <dt>string <var>s_duration</var></dt>
   *   <dd>The promotion's duration.</dd>
   *   <dt>string <var>s_title</var></dt>
   *   <dd>The promotion's name.</dd>
   *   <dt>string <var>text_package_item</var></dt>
   *   <dd>A list of promotions contained in the package (only applicable for promotions that are packages).</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_login_promotion = [];

  /**
   * A list of promotions available for the session(s) being booked. Keys refer to unique string IDs. Values are arrays with the next keys:
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
   *          The duration of a single period. One of the {@link \WellnessLiving\Core\a\ADurationSid} constants.
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
   *     A list of booking limitations for the promotion. Every element has the next keys:
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
   *     The measurement unit of <var>i_payment_period</var> in short form (only for promotions with 'membership' program.).
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
   *     The limit of sessions that can be booked by promotions.
   *   </dd>
   *   <dt>
   *     int [<var>i_payment_period</var>]
   *   </dt>
   *   <dd>
   *     The duration of the regular payment interval (only for promotions with 'membership' program).
   *   </dd>
   *   <dt>
   *     int [<var>i_session</var>]
   *   </dt>
   *   <dd>
   *     The number of sessions which are booked simultaneously (only for purchases of single sessions).
   *   </dd>
   *   <dt>
   *     int [<var>id_program_category</var>]
   *   </dt>
   *   <dd>
   *     The ID of the promotion program category (only for promotions). One of the {@link \WellnessLiving\WlProgramCategorySid} constants.
   *   </dd>
   *   <dt>
   *     int [<var>id_program_type</var>]
   *   </dt>
   *   <dd>
   *     The ID of the promotion program type (only for promotions). One of the {@link \WellnessLiving\WlProgramTypeSid} constants.
   *   </dd>
   *   <dt>
   *     int <var>id_purchase_item</var>
   *   </dt>
   *   <dd>
   *     The ID of the promotion type. One of the {@link \WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid} constants.
   *   </dd>
   *   <dt>
   *     bool [<var>is_contract</var>]
   *   </dt>
   *   <dd>
   *     <tt>true</tt> — the promotion requires a contract assignment. <tt>false</tt> — the promotion doesn't require assignment.
   *   </dd>
   *   <dt>
   *     bool [<var>is_convert</var>]
   *   </dt>
   *   <dd>
   *     If <tt>true</tt>, the promotion should be converted to another instance upon expiration. Otherwise, this will be <tt>false</tt>.
   *   </dd>
   *   <dt>
   *     bool [<var>is_renew</var>]
   *   </dt>
   *   <dd>
   *     If <tt>true</tt>, the promotion is renewable. Otherwise, this will be <tt>false</tt>.
   *   </dd>
   *   <dt>
   *     bool [<var>is_renew_check</var>]
   *   </dt>
   *   <dd>
   *     If <tt>true</tt>, the promotion is renewable and the "auto-renew" option is turned on by default. Otherwise, this will be <tt>false</tt>.
   *   </dd>
   *   <dt>
   *     string <var>k_id</var>
   *   </dt>
   *   <dd>
   *     The key of the promotion in the database. The table depends on <var>id_purchase_item</var>.
   *   </dd>
   *   <dt>
   *     string [<var>k_login_prize</var>]
   *   </dt>
   *   <dd>
   *     The key of the user's prize that can be used instead a promotion to book the session.
   *   </dd>
   *   <dt>
   *     string [<var>s_contract</var>]
   *   </dt>
   *   <dd>
   *     The contract of the promotion. This is only set if <var>is_contract</var> is <tt>true</tt>.
   *   </dd>
   *   <dt>
   *     string [<var>s_payment_duration</var>]
   *   </dt>
   *   <dd>
   *     The measurement unit of <var>i_payment_period</var> (only for promotions with 'membership' program).
   *   </dd>
   *   <dt>
   *     string [<var>s_promotion_convert</var>]
   *   </dt>
   *   <dd>
   *     The new title of the promotion to use upon conversion after expiration (only if <var>is_convert</var> is <tt>true</tt>.).
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
   *     The days of week when appointment repeats. One of the {@link \WellnessLiving\Core\a\ADateWeekSid} constants.
   *     This will be empty if the appointment doesn't repeat weekly.
   *   </dd>
   *   <dt>
   *     string [<var>dl_end</var>]
   *   </dt>
   *   <dd>
   *     The date when appointment's repeat cycle stops. This will be empty if the repeat cycle doesn't stop at a certain date.
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
   *     The measurement unit of `i_period`. One of the {@link \WellnessLiving\Core\a\ADurationSid} constants.
   *   </dd>
   *   <dt>
   *     bool [<var>is_month</var>]
   *   </dt>
   *   <dd>
   *     `true` — the appointment repeats monthly on the same date.
   *     `false` — the appointment repeats monthly on the same day of the week.
   *     `null` — the appointment doesn't repeat monthly.
   *   </dd>
   * </dl>
   *
   * This will be `null` if the booking isn't recurring.
   *
   * @post post
   * @var array|null
   */
  public $a_repeat;

  /**
   * A list of sessions being booked.
   * Keys refer to class period keys, and values refer to a list of dates/times when the session occurred.
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
   */
  public $a_session_pass = [];

  /**
   * The selected sessions on the waiting list that are unpaid.
   * Keys refer to session IDs, and values refer to index arrays of dates/times when session occurred, returned in MySQL format and in GMT.
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
   * The date/time the session is booked for.
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
   * `true` — the user pressed 'Pay later'.
   *
   * `false` — the user pressed 'Pay now'.
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
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * The default promotion key.
   * This will be empty if the class has no default promotion.
   *
   * @get result
   * @var string
   */
  public $k_promotion_default = '';

  /**
   * The key of the session being booked.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_class_period = '0';

  /**
   * The login promotion to be used to book a class.
   *
   * @post post
   * @var string
   */
  public $k_login_promotion = '';

  /**
   * The session pass to be used to book a class.
   *
   * @post post
   * @var string
   */
  public $k_session_pass = '';

  /**
   * The key of the user making the booking.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>