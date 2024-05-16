<?php

namespace WellnessLiving\Wl\Location\WorkTime;

use WellnessLiving\Core\a\ADateWeekSid;
use WellnessLiving\WlModelAbstract;

/**
 * Saves working hours for a specified location.
 *
 * Note that to run this endpoint, an authenticated user with specified permissions is required.
 */
class LocationWorkTimeModel extends WlModelAbstract
{
  /**
   * The list of the location's business hours. Each element has the next structure:<dl>
   *   <dt>int <var>i_day</var></dt>
   *   <dd>The day of the week, from Monday (1) to Sunday (7). One of the{@link ADateWeekSid} constants.</dd>
   *   <dt>string <var>t_end</var></dt>
   *   <dd>The end time of work, formatted as HH:MM.</dd>
   *   <dt>string <var>t_start</var></dt>
   *   <dd>The start time of work, formatted as HH:MM</dd>
   * </dl>
   *
   * Note that the days of the week that aren't represented in this list will be saved as non-working days.
   *
   * @post post
   * @var array[]
   */
  public $a_work_time = [];

  /**
   * The business key.
   *
   * @post post
   * @var string
   */
  public $k_business;

  /**
   * The location key.
   *
   * @post post
   * @var string
   */
  public $k_location;
}

?>