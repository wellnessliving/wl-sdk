<?php

namespace WellnessLiving\Wl\Reception\Roster;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Marks the visit as not attended using the Attendance Kiosk.
 *
 * @method WlModelRequest post() Marks the visit as not attended via the Attendance Kiosk.  Validates the Attendance Kiosk secret and updates the specified visit record to reflect that the client did not attend the session.
 */
class AttendanceListNotAttendModel extends WlModelAbstract
{
  /**
   * The business key.
   *
   * @post post
   * @var string
   */
  public $k_business = '';

  /**
   * The visit key.
   *
   * @post post
   * @var string
   */
  public $k_visit = '';

  /**
   * The secret for authenticating the attendance kiosk.
   *
   * @post post
   * @var string
   */
  public $s_secret = '';
}

?>