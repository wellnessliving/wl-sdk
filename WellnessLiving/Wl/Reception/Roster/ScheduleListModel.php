<?php

namespace WellnessLiving\Wl\Reception\Roster;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Schedule of classes for attendance web app.
 *
 * @method WlModelRequest get() Retrieves schedule of sessions.
 */
class ScheduleListModel extends WlModelAbstract
{
  /**
   * Schedule of sessions in location {@link \WellnessLiving\Wl\Schedule\ScheduleList\ScheduleListModel::$k_location} in day {@link \WellnessLiving\Wl\Schedule\ScheduleList\ScheduleListModel::$dt_date}.
   *
   * @get result
   * @var array[]
   */
  public $a_schedule;

  /**
   * Local date of the currently viewed schedule list.
   * In MySQL format, without time.
   *
   * @get get
   * @var string
   */
  public $dt_date_local = '';

  /**
   * ID of business location to show information for.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';
}

?>