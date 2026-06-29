<?php

namespace WellnessLiving\Wl\Schedule;

use WellnessLiving\Core\a\ADateWeekSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Classes\Tab\TabSid;

/**
 * Retrieves the nearest class session available for booking.
 *
 * @method WlModelRequest get() Finds the nearest class session that can be booked by the current user.  Looks no further than {@link \Wl\Schedule\ScheduleAvailableDateApi::PERIOD_LIMIT} seconds ahead from the start date.
 */
class ScheduleAvailableDateModel extends WlModelAbstract
{
  /**
   * Class keys to filter.
   *
   * Empty to search for all classes.
   *
   * @get get
   * @var string[]
   */
  public $a_class = [];

  /**
   * IDs of week days from {@link ADateWeekSid} class.
   *
   * Empty to search for all week days.
   *
   * @get get
   * @var int[]
   */
  public $a_day = [];

  /**
   * Event keys to filter.
   *
   * Empty to search for all events.
   *
   * @get get
   * @var string[]
   */
  public $a_event = [];

  /**
   * Location keys to filter.
   *
   * Empty to search in all locations.
   *
   * @get get
   * @var string[]
   */
  public $a_location = [];

  /**
   * Staff member keys to filter.
   *
   * Empty to search for all staff members.
   *
   * @get get
   * @var string[]
   */
  public $a_staff = [];

  /**
   * Time interval:
   *
   * Empty to search for all time.
   *
   * <dl>
   *   <dt>int `tl_end`</dt>
   *   <dd>End time.</dd>
   * 
   *   <dt>int `tl_start`</dt>
   *   <dd>Start time.</dd>
   * </dl>
   * @get get
   * @var array
   */
  public $a_time = [];

  /**
   * Nearest session date available for booking in user's or business timezone.
   *
   * `null` if there is no suitable session found.
   *
   * @get result
   * @var string|null
   */
  public $dl_next_available;

  /**
   * The date/time to start from in UTC.
   *
   * @get get
   * @var string
   */
  public $dtu_start = '';

  /**
   * "Book now" tab ID. One of {@link TabSid} constants.
   *
   * @get get
   * @var int
   */
  public $id_class_tab = 0;

  /**
   * `true` to include classes; `false` to exclude.
   *
   * @get get
   * @var bool
   */
  public $is_class = false;

  /**
   * `true` to include events; `false` to exclude.
   *
   * @get get
   * @var bool
   */
  public $is_event = false;

  /**
   * `true` to include only virtual classes;
   * `false` to include only in-person;
   * `null` to no filtering.
   *
   * @get get
   * @var bool
   */
  public $is_virtual = null;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Timezone key.
   *
   * @get get
   * @var string
   */
  public $k_timezone = '';
}

?>