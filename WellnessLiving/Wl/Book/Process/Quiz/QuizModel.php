<?php

namespace WellnessLiving\Wl\Book\Process\Quiz;

use WellnessLiving\WlModelAbstract;

/**
 * Manages quizzes for the class or event and selected purchase option during booking process.
 */
class QuizModel extends WlModelAbstract
{
  /**
   * Keys of user's activity.
   *
   * @post result
   * @var string[]
   */
  public $a_login_activity = [];

  /**
   * List of purchase items. Each element has format <tt>[id_purchase_item]::[k_id]</tt>, where: <dl>
   *  <dt>int <var>id_purchase_item</var></dt>
   *  <dd>ID of the purchase item. One of {@link \WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid}.</dd>
   *  <dt>string <var>k_id</var></dt>
   *  <dd>Key of the item. Depends on <var>id_purchase_item</var> of this array.</dd>
   * </dl>
   *
   * Empty if no purchases are made for booking.
   *
   * @get get
   * @var string[]
   */
  public $a_purchase_item = [];

  /**
   * List of quizzes. Each element has next structure:<dl>
   *  <dt>bool <var>is_require</var></dt>
   *  <dd>Whether the quiz is required and can not be skipped.</dd>
   *  <dt>string <var>k_quiz</var></dt>
   *  <dd>Quiz key.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_quiz = [];

  /**
   * List of quiz response keys.
   * Key is quiz key from {@link \Core\Quiz\QuizSql} table.
   * Value is response key from {@link \Core\Quiz\Response\ResponseSql} table or
   * special value from {@link Wl\Quiz\Response\QuizResponse::RESPONSE_SKIP} constant.
   *
   * @post post
   * @var array
   */
  public $a_quiz_response = [];

  /**
   * Information about recurring booking:
   * <dl>
   *   <dt>
   *     int[] [<var>a_week</var>]
   *   </dt>
   *   <dd>
   *     Days of week when appointment must repeat. Constants of {@link \WellnessLiving\Core\a\ADateWeekSid} class.
   *     Empty if appointment must not repeat weekly.
   *   </dd>
   *   <dt>
   *     string [<var>dl_end</var>]
   *   </dt>
   *   <dd>
   *     Date when appointment repeat must stop. Empty if repeat must not stop at a certain date.
   *   </dd>
   *   <dt>
   *     int [<var>i_occurrence</var>]
   *   </dt>
   *   <dd>
   *     Number of occurrences after that appointment repeat must stop.
   *     Empty if repeat must not stop after a certain number of occurrences.
   *   </dd>
   *   <dt>
   *     int <var>i_period</var>
   *   </dt>
   *   <dd>
   *     Frequency of appointment repeating.
   *   </dd>
   *   <dt>
   *     int <var>id_period</var>
   *   </dt>
   *   <dd>
   *     Measurement unit of `i_period`. One of {@link \WellnessLiving\Core\a\ADurationSid} constants.
   *   </dd>
   *   <dt>
   *     bool [<var>is_month</var>]
   *   </dt>
   *   <dd>
   *     `true` if appointment must repeat monthly at the same date.
   *     `false` if appointment must repeat monthly at the same week day.
   *     `null` if appointment must not repeat monthly.
   *   </dd>
   * </dl>
   *
   * `null` if booking must be not recurring.
   *
   * @post post
   * @var array|null
   */
  public $a_repeat;

  /**
   * Selected assets.
   *
   * Every element has keys:
   * <dl>
   *   <dt>int <var>i_index</var></dt>
   *   <dd>Order number of the asset (may be from 1 to asset quantity).</dd>
   *   <dt>string <var>k_resource</var></dt>
   *   <dd>Asset key.</dd>
   * </dl>
   *
   * @post post
   * @var array[]
   */
  public $a_resource = [];

  /**
   * Selected sessions.
   *
   * <b>Keys</b> - The class period keys.
   * <b>Values</b> - List of date/time when the session occurred.
   *
   * @post post
   * @var array
   */
  public $a_session_select = [];

  /**
   * Selected sessions on the waiting list without pay.
   *
   * Keys - session IDs.
   *
   * Values - index arrays of dates/time when session is occurred. In MySQL format. In GMT.
   *
   * @post post
   * @var array
   */
  public $a_session_wait_list_unpaid = [];

  /**
   * Keys of books are made.
   *
   * @post result
   * @var string[]
   */
  public $a_visit = [];

  /**
   * Whether the class/event can be booked at this step or not.
   * External process control flag.
   *
   * @post post
   * @var bool
   */
  public $can_book = true;

  /**
   * Date/time to which session is booked.
   *
   * @get get
   * @post get
   * @var string
   */
  public $dt_date_gmt = '';

  /**
   * Mode type. One of {@link \WellnessLiving\Wl\Mode\ModeSid} constants.
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
   * `true` if need next steps of wizard (need to purchase something to book selected session); `false` if no need next steps (all that need was already bought).
   *
   * @post result
   * @var bool
   */
  public $is_next;

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
   * Primary key from {@link  \RsLoginProductSql}.
   *
   * @post post
   * @var string
   */
  public $k_login_promotion = '';

  /**
   * Session pass to be used to book a class.
   *
   * Primary key from {@link  \Wl\Session\Pass\Sql}.
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