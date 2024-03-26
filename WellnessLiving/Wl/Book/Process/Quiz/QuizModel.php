<?php

namespace WellnessLiving\Wl\Book\Process\Quiz;

use WellnessLiving\WlModelAbstract;

/**
 * Manages quizzes and a selected Purchase Option for a class or event during the booking process.
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
   *  <dd>The ID of the purchase item. One of the {@link \WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid} constants.</dd>
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
   * Keys refer to quiz keys, and values refer to response keys or special values from the
   * {@link Wl\Quiz\Response\QuizResponse::RESPONSE_SKIP} constant.
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
   *     The days of the week when the appointment repeats. One of the {@link \WellnessLiving\Core\a\ADateWeekSid} constants.
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
   *     The measurement unit of `i_period`. One of the {@link \WellnessLiving\Core\a\ADurationSid} constants.
   *   </dd>
   *   <dt>
   *     bool [<var>is_month</var>]
   *   </dt>
   *   <dd>
   *     `true` — the appointment repeats monthly on the same date.<br>
   *     `false` — the appointment repeats monthly on the same week day.<br>
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
   * Keys refer to class period keys, and values refer to the list of dates/times when the session occurred.
   *
   * @post post
   * @var array
   */
  public $a_session_select = [];

  /**
   * The selected sessions on the wait list that are unpaid.
   *
   * Keys refer to session IDs, and values refer to index arrays of dates/times when session occurred (n MySQL format and in GMT).
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
   * The dates/times the session is booked for.
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
   * `true` — the user selected 'Pay later'.
   *
   * `false` — the user selected 'Pay now'.
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
   * The key of the booked session.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_class_period = '0';

  /**
   * The login promotion used to book a class.
   *
   * @post post
   * @var string
   */
  public $k_login_promotion = '';

  /**
   * The session pass used to book a class.
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