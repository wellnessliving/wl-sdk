<?php

namespace WellnessLiving\Wl\Login\Attendance;

/**
 * List of reasons why attendance list can be not full.
 */
class FilterReasonSid
{
  /**
   * Only attended visits that excluded from payroll calculation displays.
   */
  const PAYROLL_ATTEND = 1;

  /**
   * Only no show visits that excluded from payroll calculation displays.
   */
  const PAYROLL_TRUANCY = 2;
}

?>