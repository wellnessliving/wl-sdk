<?php

namespace WellnessLiving\Wl\Reception\Roster;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Book a class for a client using the Attendance Kiosk.
 *
 * @method WlModelRequest post() Books a class for the client via the Attendance Kiosk and returns whether the client was placed on the class list or waitlist.  Validates the Attendance Kiosk secret and books the client into the specified class period, returning a flag indicating whether the client was placed on the class list or the waitlist.
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