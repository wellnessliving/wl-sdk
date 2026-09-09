<?php

namespace WellnessLiving\Wl\Schedule\Config\Availability;

/**
 * Types of staff member availability on the schedule.
 */
class ScheduleAvailabilitySid
{
  /**
   * Means that staff is available to be booked based on the selected on the schedule filters.
   *
   * @title Available
   */
  const AVAILABLE = 2;

  /**
   * Means that staff leads at least one of the selected on the filter service.
   *
   * @title Scheduled services
   */
  const SCHEDULED_SERVICES = 1;
}

?>