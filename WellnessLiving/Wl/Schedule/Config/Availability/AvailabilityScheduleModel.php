<?php

namespace WellnessLiving\Wl\Schedule\Config\Availability;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns list of scheduled appointments, classes and events for all staff members of the business.
 * Is used to get list of staff members with all scheduled for them services for option "Only scheduled" in
 * Staff Availability filter.
 *
 * @method WlModelRequest get()
 */
class AvailabilityScheduleModel extends WlModelAbstract
{
  /**
   * List of staff members with services they have during the given date range.
   *
   * @get result
   * @var array
   */
  public $a_staff = [];

  /**
   * Date to get schedule to.
   *
   * @get get
   * @var string
   */
  public $dl_end = '';

  /**
   * Date to get schedule from.
   *
   * @get get
   * @var string
   */
  public $dl_start = '';

  /**
   * ID of business for which list of staff members must be checked.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';
}

?>