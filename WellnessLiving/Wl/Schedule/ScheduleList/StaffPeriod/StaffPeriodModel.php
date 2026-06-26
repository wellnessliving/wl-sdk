<?php

namespace WellnessLiving\Wl\Schedule\ScheduleList\StaffPeriod;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Data of working hours of staff member.
 *
 * @method WlModelRequest get() Returns working hours list for business staff members in given day.
 */
class StaffPeriodModel extends WlModelAbstract
{
  /**
   * Working hours list.
   *
   * @get result
   * @var array
   */
  public $a_staff_period;

  /**
   * Date for which working hours are required.
   * In business timezone.
   *
   * @get get
   * @var string
   */
  public $dt_date = '';

  /**
   * ID of business for which working hours are required.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';
}

?>