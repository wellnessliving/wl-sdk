<?php

namespace WellnessLiving\Wl\Schedule\ScheduleList\StaffApp\Service;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Information about appointment services which must be represented on schedule.
 *
 * @method WlModelRequest get() Gets a list of appointment services which must be represented on schedule.  Returns the appointment services configured to appear on the business schedule, keyed by service  key with the service title as the value.
 */
class ScheduleListServiceModel extends WlModelAbstract
{
  /**
   * List of appointment services. Keys - service IDs; primary key in the `rs_service` table. Values - service title.
   *
   * @get result
   * @var array<string, string>
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