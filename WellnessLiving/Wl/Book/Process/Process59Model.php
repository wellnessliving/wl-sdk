<?php

namespace WellnessLiving\Wl\Book\Process;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that performs the booking wizard steps.
 *
 * This endpoint includes changes to the list of steps if the service is already booked for the currently selected client,
 * and if {@link Process59Model::$is_family_relation_book} is set to `true`.
 */
class Process59Model extends WlModelAbstract
{
  /**
   * Relationships who clients are allowed to book for.
   * One of the {@link \WellnessLiving\Wl\Family\Relation\WlFamilyRelationSid} constants.
   *
   * This will be `null` if clients aren't allowed to book for their relationships.
   *
   * @get result
   * @var int[]|null
   */
  public $a_family_relation_login_allow;

  /**
   * All the steps to be performed to make a booking. Every element has the next keys:
   * <dl>
   *   <dt>
   *     int <var>id_book_process</var>
   *   </dt>
   *   <dd>
   *     The step ID. One of the {@link \WellnessLiving\Wl\Book\Process\ProcessSpaSid} constants.
   *   </dd>
   *   <dt>
   *     bool [<var>is_current</var>]
   *   </dt>
   *   <dd>
   *     <tt>true</tt> — this item is current.
   *     <tt>false</tt> — this item isn't current or not set yet.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_path = [];

  /**
   * Information about the recurring booking:
   * <dl>
   *   <dt>
   *     int[] [<var>a_week</var>]
   *   </dt>
   *   <dd>
   *     The days of week when the appointment repeat. One of the {@link \WellnessLiving\Core\a\ADateWeekSid} constants.
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
   *     <tt>true</tt> — the appointment repeats monthly on the same date.
   *     <tt>false</tt> — the appointment repeats monthly on the same day of the week.
   *     <tt>null</tt> — the appointment doesn't repeat monthly.
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
   * The purchase rule ID.
   * One of the {@link \WellnessLiving\Wl\Classes\RequirePaySid} constants.
   *
   * @get result
   * @var int
   */
  public $id_pay_require;

  /**
   * Determines if the client must authorize the credit card.
   *
   * @get result
   * @var bool
   */
  public $is_card_authorize = false;

  /**
   * If `true`, the session being booked is an event. Otherwise, this will be `false`.
   *
   * @get result
   * @var bool
   */
  public $is_event;

  /**
   * Determines whether clients are allowed to book for their relationships without switching profiles.
   *
   * @get result
   * @var bool
   */
  public $is_family_relation_book;

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
   * Determines whether the class/event is free (price).
   *
   * @get result
   * @var bool
   */
  public $is_free = false;

  /**
   * If `true`, the client has a credit card. Otherwise, this will be `false`.
   *
   * @get result
   * @var bool
   */
  public $is_have_credit_card = false;

  /**
   * `true` — the client can select several sessions per booking.
   *
   * `false` — the client can't select several sessions.
   *
   * @get result
   * @var bool
   */
  public $is_session;

  /**
   * If `true`, the user can be placed on a wait list. Otherwise, this will be `false`.
   *
   * @get result
   * @var bool
   */
  public $is_wait;

  /**
   * The key of the booked session.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_class_period = '0';

  /**
   * The key of the location where the session is booked.
   *
   * @get result
   * @var string
   */
  public $k_location;

  /**
   * The login promotion used to book the class.
   *
   * @post post
   * @var string
   */
  public $k_login_promotion = '';

  /**
   * The session pass used to book the class.
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