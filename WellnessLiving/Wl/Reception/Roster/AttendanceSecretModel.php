<?php

namespace WellnessLiving\Wl\Reception\Roster;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api endpoint to get the secret string for Attendance Kiosk requests.
 *
 * @method WlModelRequest get() Gets the secret string for Attendance Kiosk requests.  Requires backend access and validates that the specified location belongs to the given business, then returns the secret token used to authenticate Attendance Kiosk API requests.
 */
class AttendanceSecretModel extends WlModelAbstract
{
  /**
   * Key of the business.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Key of the location.
   *
   * @get get
   * @var string
   */
  public $k_location = '';

  /**
   * Secret string.
   *
   * @get result
   * @var string
   */
  public $s_secret = '';
}

?>