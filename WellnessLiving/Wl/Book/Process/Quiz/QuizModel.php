<?php

namespace WellnessLiving\Wl\Book\Process\Quiz;

use WellnessLiving\Core\a\ADateWeekSid;
use WellnessLiving\Core\a\ADurationSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;

/**
 * An endpoint that manages quizzes and a selected Purchase Option for a class or event during the booking process.
 *
 * Note that the terms "Purchase Option" and "promotion" are used interchangeably.
 */
class QuizModel extends WlModelAbstract
{
  /**
   * The user's activity keys.
   *
   * @post result
   * @var string[]
   */
  public $a_login_activity = [];

  /**
   * The list of purchase items. Each element has the format <tt>[id_purchase_item]::[k_id]</tt>, where: <dl>
   *  <dt>int <var>id_purchase_item</var></dt>
   *  <dd>The ID of the purchase item. One of the {@link WlPurchaseItemSid} constants.</dd>
   *  <dt>string <var>k_id</var></dt>
   *  <dd>The item key. This depends on <var>id_purchase_item</var> of this array.</dd>
   * </dl>
   *
   * This will be empty if no purchases are made for the booking.
   *
   * @get get
   * @var string[]
   */
  public $a_purchase_item = [];

  /**
   * The list of quizzes. Each element has the next structure:<dl>
   *  <dt>bool <var>is_require</var></dt>
   *  <dd>Determines whether the quiz is required.</dd>
   *  <dt>string <var>k_quiz</var></dt>
   *  <dd>The quiz key.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_quiz = [];

  /**
   * The list of quiz response keys.
   *
   * Keys refer to quiz keys.
   * And values refer to response keys.
   *
   * @post post
   * @var array
   */
  public $a_quiz_response = [];

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
   * The selected assets.
   *
   * Every element has the next keys:
   * <dl>
   *   <dt>int <var>i_index</var></dt>
   *   <dd>The order number of the asset (could be from 1 to the asset quantity).</dd>
   *   <dt>string <var>k_resource</var></dt>
   *   <dd>The asset key.</dd>
   * </dl>
   *
   * @post post
   * @var array[]
   */
  public $a_resource = [];

  /**
   * The selected sessions.
   *
   * Keys refer to class period keys.
   * And values refer to the list of dates/times when the session occurred.
   *
   * @post post
   * @var array
   */
  public $a_session_select = [];

  /**
   * The selected sessions on the wait list that are unpaid.
   *
   * Keys refer to session IDs.
   * And values refer to index arrays of dates/times when session occurred (n MySQL format and in GMT).
   *
   * @post post
   * @var array
   */
  public $a_session_wait_list_unpaid = [];

  /**
   * The keys the bookings that have been made.
   *
   * @post result
   * @var string[]
   */
  public $a_visit = [];

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
   * The mode type. One of the {@link \WellnessLiving\Wl\Mode\ModeSid} constants.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_mode = 0;

  /**
   * `true` if user pressed 'Pay later'.
   * `false` if user pressed 'Pay now'.
   *
   * @post post
   * @var bool
   */
  public $is_force_pay_later = false;

  /**
   * If `true`, the next steps of the booking wizard are required for the purchase or booking. Otherwise, this will be `false`.
   *
   * @post result
   * @var bool
   */
  public $is_next;

  /**
   * Key of the business in which the wizard is executed.
   *
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