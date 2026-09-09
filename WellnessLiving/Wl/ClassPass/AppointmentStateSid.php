<?php

namespace WellnessLiving\Wl\ClassPass;

/**
 * Appointment statuses list.
 */
class AppointmentStateSid
{
  /**
   * Cancelled.
   */
  const APPOINTMENT_CANCELLED = 1;

  /**
   * Attended.
   */
  const ATTENDED = 2;

  /**
   * Cancelled.
   */
  const CANCELLED = 3;

  /**
   * Booked.
   */
  const ENROLLED = 4;

  /**
   * Cancelled with penalty.
   */
  const LATE_CANCELLED = 5;
}

?>