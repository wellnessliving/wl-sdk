<?php

namespace WellnessLiving\Wl\Schedule\ScheduleList\StaffApp\Service;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Information about appointment services which must be represented on schedule.
 *
 * @method WlModelRequest get() Gets a list of appointment services which must be represented on schedule.
 */
class ScheduleListServiceModel extends WlModelAbstract
{
  /**
   * List of appointment services. Keys - service IDs; Values - service title.
   *
   * @get result
   * @var array[]
   */
  public $a_service;

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