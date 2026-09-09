<?php

namespace WellnessLiving\Wl\Login\Promotion\Attendance;

/**
 * Types of the attendance restrictions.
 *
 * Last used ID: 2.
 */
class RestrictionCalculateSid
{
  /**
   * Based on calendar. Start of the period is always start of the week, month, year.
   * End of the period is end of the week, month, year.
   */
  const CALENDAR = 1;

  /**
   * Based on membership payment periods.
   */
  const PAYMENT = 2;
}

?>