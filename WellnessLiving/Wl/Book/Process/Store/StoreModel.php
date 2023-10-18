<?php

namespace WellnessLiving\Wl\Book\Process\Store;

use WellnessLiving\WlModelAbstract;

/**
 * Booking Wizard for page "Purchase Options".
 */
class StoreModel extends WlModelAbstract
{
  /**
   * Keys of user's activity. Not empty when booking process is finished.
   *
   * @post result
   * @var string[]
   */
  public $a_login_activity;

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
   * List of assets which are being booked. Every element has next keys:
   * <dl>
   *   <dt>int <var>i_index</var></dt>
   *   <dd>Order number of the asset (maybe from 1 to asset quantity).</dd>
   *   <dt>string <var>k_resource</var></dt>
   *   <dd>The key of asset.</dd>
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
   * <b>Values</b> - List of date/time when the session occurred in MySQL format and in GMT.
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
  public $a_visit;

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
   * <tt>true</tt> if need next steps of wizard (need to purchase something to book selected session);
   * <tt>false</tt> if no need next steps (all that need was already bought).
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