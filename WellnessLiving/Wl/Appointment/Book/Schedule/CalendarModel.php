<?php

namespace WellnessLiving\Wl\Appointment\Book\Schedule;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that retrieves a list of all calendar days in a specified month with
 * available and unavailable appointment bookings in the schedule.
 */
class CalendarModel extends WlModelAbstract
{
  /**
   * Array with calendar schedule days and appointment availability.
   * <dl>
   *   <dt>string <var>dt_date</var></dt><dd>Date item of the calendar.</dd>
   *   <dt>int <var>i_week</var></dt><dd>Number of day in week.</dd>
   *   <dt>bool <var>is_available</var></dt><dd>Whether booking is available for this day.</dd>
   *   <dt>bool <var>is_current</var></dt><dd>Whether date is current.</dd>
   *   <dt>bool <var>is_out</var></dt><dd>Whether date is out of current month or it's business/location closed date.</dd>
   *   <dt>bool <var>is_waitlist_only</var></dt><dd>Whether booking for this day available only in wait list.</dd>
   *   <dt>bool <var>is_week_end</var></dt><dd>Whether date is last day of the week.</dd>
   *   <dt>bool <var>is_week_start</var></dt><dd>Whether date is first day of the week.</dd>
   *   <dt>string <var>s_day</var></dt><dd>String representation of day number with leading zeroes.</dd>
   *   <dt>string <var>s_week</var></dt><dd>String representation of week day (one letter, i.e. "F").</dd>
   * </dl>
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var array|null
   */
  public $a_date = null;

  /**
   * Information about timezone.
   * <dl>
   *   <dt>array|null <var>a_timezone</var></dt>
   *   <dd>
   *     `null` if business settings doesn't allow client to adjust timezone, otherwise list of timezones:
   *     <dl>
   *       <dt>int <var>i_order</var></dt>
   *       <dd>Timezone order.</dd>
   *       <dt>int <var>i_shift</var></dt>
   *       <dd>Timezone shift from UTC in hours.</dd>
   *       <dt>bool <var>is_select</var></dt>
   *       <dd>`true` for selected timezone - from {@link CalendarModel::$k_timezone} param or client's default timezone when param not set.</dd>
   *       <dt>string <var>k_timezone</var></dt>
   *       <dd>Timezone key.</dd>
   *       <dt>string <var>s_title</var></dt>
   *       <dd>Timezone name.</dd>
   *       <dt>string <var>text_abbr</var></dt>
   *       <dd>Timezone abbreviation.</dd>
   *     </dl>
   *   </dd>
   *   <dt>string|null <var>name</var></dt>
   *   <dd>`null` if business settings doesn't allow client to adjust timezone, otherwise timezone input name.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_timezone_data = [];

  /**
   * Array with short week day's names (2 letters, i.e. 'Fr') for calendar month view. Week days order according to business's settings.
   *
   * <dl>
   *   <dt>int <var>i_day</var></dt>
   *   <dd>Week day, one of the {@link \WellnessLiving\Core\a\ADateWeekSid} constants.</dd>
   *   <dt>string <var>html_week_day</var></dt>
   *   <dd>Short week day's name (2 letters, i.e. 'Fr').</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_week_name = [];

  /**
   * The date to determine what month to display.
   *
   * This will be `null` if not set yet.
   *
   * @get get,result
   * @var string|null
   */
  public $dt_date = null;

  /**
   * The duration of the asset.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var int|null
   */
  public $i_duration = null;

  /**
   * An index of the selected asset.
   *
   * This will be `null` if not set yet or if the asset isn't on the layout.
   *
   * @get get
   * @var int|null
   */
  public $i_index = null;

  /**
   * The staff member's gender.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var int|null
   */
  public $id_gender_staff = null;

  /**
   * The location ID to show what days are available for booking.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_location = null;

  /**
   * The resource ID to show what days are available for booking.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_resource = null;

  /**
   * The service ID to show what days are available for booking.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_service = null;

  /**
   * The staff ID to show what days are available for booking.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_staff = null;

  /**
   * Key of timezone.
   *
   * `null` if not set to use client's profile timezone.
   *
   * @get get
   * @var string|null
   */
  public $k_timezone = null;

  /**
   * A list of service add-ons, serialized to be usable as a model key.
   *
   * @get get
   * @var string
   */
  public $s_product = '';

  /**
   * The user ID.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>