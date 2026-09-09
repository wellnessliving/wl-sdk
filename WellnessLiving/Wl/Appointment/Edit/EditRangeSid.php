<?php

namespace WellnessLiving\Wl\Appointment\Edit;

/**
 * Different types of range to apply rescheduling. Important for recurring appointments that
 * can be changed only once, per date range or forward from current date.
 */
class EditRangeSid
{
  /**
   * Change all appointment from current one until the end of the recurring appointments.
   */
  const FORWARD = 2;

  /**
   * Change only one appointment.
   */
  const ONCE = 1;

  /**
   * Change all appointments withing the given date range.
   */
  const RANGE = 3;
}

?>