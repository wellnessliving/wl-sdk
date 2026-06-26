<?php

namespace WellnessLiving\Wl\Schedule\WorkingTime;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api for staff working time.
 *
 * @method WlModelRequest get() Gets working hours for some staff.
 */
class StaffWorkingModel extends WlModelAbstract
{
  /**
   * Staff period.
   *
   * @get result
   * @var array
   */
  public $a_staff_period;

  /**
   * End date of the staff working.
   *
   * @get get
   * @var string
   */
  public $dl_end = '';

  /**
   * Start date of the staff working.
   *
   * @get get
   * @var string
   */
  public $dl_start = '';

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Location to show available appointment booking schedule.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * @get get
   * @var string
   */
  public $k_service = '0';

  /**
   * Staff Key to show what days are available for appointment booking.
   *
   * @get get
   * @var string|null
   */
  public $k_staff = null;
}

?>