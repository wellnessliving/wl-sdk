<?php

namespace WellnessLiving\Wl\Reception\Roster;

use WellnessLiving\WlModelAbstract;

/**
 * Marks the visit as not attended using the Attendance Kiosk.
 */
class AttendanceListNotAttendModel extends WlModelAbstract
{
  /**
   * The business key.
   *
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * The visit key.
   *
   * @post result
   * @var string
   */
  public $k_visit;

  /**
   * The secret for authenticating the attendance kiosk.
   *
   * @post get
   * @var string
   */
  public $s_secret = '';
}

?>