<?php

namespace WellnessLiving\Wl\Schedule;

use WellnessLiving\WlModelAbstract;

/**
 * A model for staff to cancel sessions.
 */
class CancelModel extends WlModelAbstract
{
  /**
   * Date of the schedule.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post get
   * @var string|null
   */
  public $dt_date = null;

  /**
   * Appointment key.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post get
   * @var string|null
   */
  public $k_appointment = null;

  /**
   * Class period key.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post get
   * @var string|null
   */
  public $k_class_period = null;

  /**
   * User key.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post get
   * @var string|null
   */
  public $uid = null;
}

?>