<?php

namespace WellnessLiving\Wl\Book\Process\Resource;

use WellnessLiving\Core\a\ADateWeekSid;
use WellnessLiving\Core\a\ADurationSid;
use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that selects assets for making a booking.
 *
 * @deprecated Use {@link Resource54Model} instead.
 */
class ResourceModel extends WlModelAbstract
{
  /**
   * The keys of a user's activity.
   * This won't be empty only if the session(s) was booked at this step.
   *
   * @post result
   * @var string[]
   */
  public $a_login_activity = [];

  /**
   * Information about the recurring booking:
   * <dl>
   *   <dt>
   *     int[] [<var>a_week</var>]
   *   </dt>
   *   <dd>
   *     The days of the week when appointment repeats. One of the {@link \WellnessLiving\Core\a\ADateWeekSid} constants.
   *     This won't be empty if the appointment doesn't repeat weekly.
   *   </dd>
   *   <dt>
   *     string [<var>dl_end</var>]
   *   </dt>
   *   <dd>
   *     The date when the appointment's repeat cycle stops. This won't be empty if repeat cycle doesn't stop at a certain date.
   *   </dd>
   *   <dt>
   *     int [<var>i_occurrence</var>]
   *   </dt>
   *   <dd>
   *     The number of occurrences after which the appointment's repeat cycle stops.
   *     This won't be empty if the repeat cycle doesn't stop after a certain number of occurrences.
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
   *     `false` — the appointment repeats monthly on the same day of the week.<br>
   *     `null` — the appointment doesn't repeat monthly.
   *   </dd>
   * </dl>
   *
   * This will be `null` if booking isn't recurring.
   *
   * @post post
   * @var array|null
   */
  public $a_repeat;

  /**
   * A list of asset categories that are available for the specified session. Every element has the next keys:
   * <dl>
   *   <dt>
   *     array <var>a_client</var>
   *   </dt>
   *   <dd>
   *     A list of clients who have booked assets for this session.
   *     1st level keys refer to asset keys. 2nd level keys refer to asset numbers.
   *     For example, if you want to check if 10th asset with the key '125' is free,
   *     you have to check if <tt>a_client['125']['10']</tt> is empty.
   *   </dd>
   *   <dt>
   *     array[] <var>a_resource_list</var>
   *   </dt>
   *   <dd>
   *     A list of available assets. Every element has the next keys:
   *     <dl>
   *       <dt>
   *         array <var>a_image</var>
   *       </dt>
   *       <dd>
   *         The asset image data. See {@link RsResourceImage::data()} for details.
   *       </dd>
   *       <dt>
   *         int <var>i_index</var>
   *       </dt>
   *       <dd>
   *         The asset number. This applies for assets with a quantity more than <tt>1</tt>.
   *       </dd>
   *       <dt>
   *         bool <var>is_current</var>
   *       </dt>
   *       <dd>
   *         If <tt>true</tt>, this asset is selected by a client. Otherwise, this will be <tt>false</tt>.
   *       </dd>
   *       <dt>
   *         string <var>k_resource</var>
   *       </dt>
   *       <dd>
   *         The asset key in the database.
   *       </dd>
   *       <dt>
   *         string <var>s_resource</var>
   *       </dt>
   *       <dd>
   *         The asset title.
   *       </dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     bool <var>has_current</var>
   *   </dt>
   *   <dd>
   *     If <tt>true</tt>, this resource is in the list of available assets. Otherwise, this will be <tt>false</tt>.
   *   </dd>
   *   <dt>
   *     bool <var>is_client_select</var>
   *   </dt>
   *   <dd>
   *     If <tt>true</tt>, the client selected the resource from the current group. Otherwise, this will be <tt>false</tt>.
   *   </dd>
   *   <dt>
   *     bool <var>is_select</var>
   *   </dt>
   *   <dd>
   *     If <tt>true</tt>, the asset category has selected resources. Otherwise, this will be <tt>false</tt>.
   *   </dd>
   *   <dt>
   *     bool <var>is_share</var>
   *   </dt>
   *   <dd>
   *     <tt>true</tt> — resources in this category don't belong to certain users, but to the entire session.<br>
   *     <tt>false</tt> — resources belong to specific users.
   *   </dd>
   *   <dt>
   *     string <var>k_resource_layout</var>
   *   </dt>
   *   <dd>
   *     The asset layout key.
   *   </dd>
   *   <dt>
   *     string <var>k_resource_type</var>
   *   </dt>
   *   <dd>
   *     The asset category key.
   *   </dd>
   *   <dt>
   *     string <var>s_resource_type</var>
   *   </dt>
   *   <dd>
   *     The asset category title.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_resource_all = [];

  /**
   * The selected assets. Every element has the next keys:
   * <dl>
   *   <dt>int <var>i_index</var></dt>
   *   <dd>The asset number. Applies only for assets with a quantity greater than <tt>1</tt>.</dd>
   *   <dt>string <var>k_resource</var></dt>
   *   <dd>The asset key.</dd>
   * </dl>
   *
   * @post post
   * @var array
   */
  public $a_resource_select = [];

  /**
   * The selected sessions.
   * This won't be empty only for session mode.
   *
   * Keys refer to class period keys, and values refer to a list of the dates/times when the session occurred (returned in MySQL format and in GMT).
   *
   * @get get
   * @post get
   * @var array
   */
  public $a_session = [];

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
   * The keys of the bookings that have been made.
   * This won't be empty only if the session(s) was booked at this step.
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
   * `true` — the next steps of the booking wizard are required (for example, to purchase something to book the selected session).

   * `false` — no further booking steps are required.
   *
   * @post result
   * @var bool
   */
  public $is_next = false;

  /**
   * The key of the booked session.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_class_period = '0';

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