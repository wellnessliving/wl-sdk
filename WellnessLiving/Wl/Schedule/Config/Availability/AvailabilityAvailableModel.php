<?php

namespace WellnessLiving\Wl\Schedule\Config\Availability;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns list of available appointments for all staff members of the business.
 * Also returns, whether staff member provides classes or not.
 *
 * @method WlModelRequest get()
 */
class AvailabilityAvailableModel extends WlModelAbstract
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
   * `true` if we were not able to calculate staff members for all services in a reasonable time and had to stop calculation.
   * `false` if everthing was calculated.
   *
   * @get result
   * @var bool
   */
  public $is_timeout = false;

  /**
   * List of selected on the schedule appointment types.
   *
   * @get get
   * @var string
   */
  public $json_service = '';

  /**
   * ID of business for which list of staff members must be checked.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';
}

?>