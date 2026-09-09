<?php

namespace WellnessLiving\Wl\Schedule\ScheduleList;

/**
 * Possible layouts of the schedule. Exist two main layout types: <tt>List</tt> and <tt>Calendar</tt>.
 * <ul>
 *   <li>
 *     List.
 *     Entire schedule is represented like chronological list from earlier date to later date
 *     and all events are represented like rows from this list.
 *     Different columns contain particular information about each event. For example time, staff name, title of the event, etc.
 *   </li>
 *   <li>
 *     Calendar.
 *     Entire schedule is represented like calendar with cells. Each cell corresponds to a specific time.
 *     Each event is represented like element on calendar grid.
 *     All elements have different size and color and contain short information about the event. For example time, staff name, title of the event, etc.
 *     Columns are groups of the events grouped on a particular principle.
 *     For example in a case when columns group events by dates, each column shows schedule for particular date.
 *     In a case when columns group events by staff, each column shows schedule for particular staff(available only for schedule on particular day).
 *   </li>
 * </ul>
 */
class PeriodSid
{
  /**
   * Calendar layout to view schedule for specified day grouped by assets.
   */
  const CALENDAR_ASSET = 1;

  /**
   * Calendar layout to view schedule for specified day grouped by locations.
   */
  const CALENDAR_LOCATION = 2;

  /**
   * Calendar layout to view schedule for specified month. Month view available only in calendar mode.
   */
  const CALENDAR_MONTH = 4;

  /**
   * Calendar layout to view schedule for specified day grouped by staff.
   */
  const CALENDAR_STAFF = 3;

  /**
   * Calendar layout to view schedule for specified week.
   */
  const CALENDAR_WEEK = 5;

  /**
   * List layout to view schedule for specified day.
   */
  const DAY = 6;

  /**
   * List layout to view schedule for specified week.
   */
  const WEEK = 7;
}

?>