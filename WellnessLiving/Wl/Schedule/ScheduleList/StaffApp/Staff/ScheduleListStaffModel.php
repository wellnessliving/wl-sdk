<?php

namespace WellnessLiving\Wl\Schedule\ScheduleList\StaffApp\Staff;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Information about staff members which may be shown on business schedule.
 *
 * @method WlModelRequest get() Gets information about staff members of business.
 */
class ScheduleListStaffModel extends WlModelAbstract
{
  /**
   * IDs of staff members which must be represented of business schedule.
   *
   * @get result
   * @var string[]
   */
  public $a_staff;

  /**
   * Business key.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_business = null;

  /**
   * User key.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $uid = null;
}

?>