<?php

namespace WellnessLiving\Wl\Promotion\Edit\Limit\Cycle;

/**
 * Attendance Restriction cycle type.
 */
class Sid
{
  /**
   * Attendance Restriction is applied at the start of the calendar cycle.
   */
  public const CALENDAR = 1;

  /**
   * Attendance Restriction is applied at the start of the payment cycle.
   */
  public const PAYMENT = 2;
}
?>