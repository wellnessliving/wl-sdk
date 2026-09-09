<?php

namespace WellnessLiving\Wl\Import\Attendance;

/**
 * List of different attendance imports.
 *
 * Last used ID: 3
 */
abstract class AttendanceTypeSid
{
  /**
   * Import of the appointments and bookable assets.
   */
  const APPOINTMENT = 1;

  /**
   * Import of the visits to classes and events.
   */
  const CLASSES = 2;

  /**
   * Gym visits.
   */
  const GYM = 3;
}

?>