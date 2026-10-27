<?php

namespace WellnessLiving\Wl;

/**
 * Payroll types.
 */
abstract class StudioPersonnelSalarySid
{
  /**
   * Charge monthly salary.
   */
  const MONTH = 2;

  /**
   * Do not to charge the salary automatically.
   */
  const NO = 1;

  /**
   * Charge weekly salary.
   */
  const WEEK = 3;
}

?>