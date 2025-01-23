<?php

namespace WellnessLiving\Wl\Reception\Roster;

use WellnessLiving\WlModelAbstract;

/**
 * Book a class for a client using the Attendance Kiosk.
 */
class AttendanceListBookModel extends WlModelAbstract
{
  /**
   * The UTC datetime for the class in MySQL format.
   *
   * @post post
   * @var string
   */
  public $dtu_date = '';

  /**
   * `true` if the client is on the waitlist for the class, `false` if they are on the class list.
   *
   * @post result
   * @var bool
   */
  public $is_wait;

  /**
   * The business key.
   *
   * @post post
   * @var string
   */
  public $k_business = '';

  /**
   * The class period key.
   *
   * @post post
   * @var string
   */
  public $k_class_period = '';

  /**
   * The secret for authenticating the attendance kiosk.
   *
   * @post post
   * @var string
   */
  public $s_secret = '';

  /**
   * The status message displayed on a successful booking.
   * Describes whether client was put in class list or waitlist.
   *
   * @post result
   * @var string
   */
  public $text_message;

  /**
   * The client's user key.
   *
   * @post post
   * @var string
   */
  public $uid = '';
}

?>