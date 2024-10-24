<?php

namespace WellnessLiving\Wl\Reception\Roster;

use WellnessLiving\WlModelAbstract;

/**
 * Book a class for a client and mark as attended using the Attendance Kiosk.
 */
class AttendanceListAttendModel extends WlModelAbstract
{
  /**
   * The UTC datetime for the class in MySQL format.
   *
   * @post get
   * @var string
   */
  public $dtu_date = '';

  /**
   * The business key.
   *
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * The class period key.
   *
   * @post get
   * @var string
   */
  public $k_class_period = '';

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

  /**
   * The status message displayed on a successful check-in.
   *
   * @post result
   * @var string
   */
  public $text_message;

  /**
   * The client's user key.
   *
   * @post get
   * @var string
   */
  public $uid = '';
}

?>