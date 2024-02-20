<?php

namespace WellnessLiving\Wl\Book\Process\Store;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that manages the booking wizard for the "Purchase Options" page.
 */
class StoreModel extends WlModelAbstract
{
  /**
   * The user's activity keys. This won't be empty when the booking process is finished.
   *
   * @post result
   * @var string[]
   */
  public $a_login_activity;

  /**
   * Information about the recurring booking:
   * <dl>
   *   <dt>
   *     int[] [<var>a_week</var>]
   *   </dt>
   *   <dd>
   *     The days of the week when appointment repeats. One of the {@link \WellnessLiving\Core\a\ADateWeekSid} constants.
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
   * A list of assets being booked. Every element has the next keys:
   * <dl>
   *   <dt>int <var>i_index</var></dt>
   *   <dd>The order number of the asset (from 1 to the asset quantity).</dd>
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
   * Keys refer to class period keys, and values refer to the list of dates/times when the session occurred (returned in MySQL format and in GMT).
   *
   * @post post
   * @var array
   */
  public $a_session_select = [];

  /**
   * The selected sessions on the wait list that are unpaid.
   *
   * Keys refer to session IDs, and values refer to index arrays of dates/times when the session occurred (returned in MySQL format and in GMT).
   *
   * @post post
   * @var array
   */
  public $a_session_wait_list_unpaid = [];

  /**
   * The keys of bookings that have been made.
   *
   * @post result
   * @var string[]
   */
  public $a_visit;

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
   * `true` — the next steps of booking wizard are required to purchase something or to book the selected session.
   *
   * `false` — no further steps in the booking wizard are required.
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