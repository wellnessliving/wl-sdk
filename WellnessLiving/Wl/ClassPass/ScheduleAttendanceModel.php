<?php

namespace WellnessLiving\Wl\ClassPass;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns a list of all partners.
 *
 * Dispatched URL: <tt>/cp/v1/partners/{partner_id}/venues/{venue_id}/schedules/{schedule_id}/attendance</tt>.
 *
 * @method WlModelRequest delete()
 * @method WlModelRequest get()
 * @method WlModelRequest patch()
 * @method WlModelRequest post()
 * @method WlModelRequest put() This method is called to process <tt>PUT</tt> query.
 */
class ScheduleAttendanceModel extends WlModelAbstract
{
  /**
   * @field attendance
   * @get result
   * @var array
   */
  public $a_attendance;

  /**
   * @field pagination
   * @get result
   * @var array
   */
  public $a_pagination;

  /**
   * Partner ID.
   *
   * @get get
   * @var string
   */
  public $s_partner;

  /**
   * Schedule ID.
   *
   * @get get
   * @var string
   */
  public $s_schedule;

  /**
   * Venue ID.
   *
   * @get get
   * @var string
   */
  public $s_venue;
}

?>