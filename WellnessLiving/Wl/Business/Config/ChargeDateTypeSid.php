<?php

namespace WellnessLiving\Wl\Business\Config;

/**
 * List of date periods to charge clients.
 *
 * Last used ID: 6.
 */
class ChargeDateTypeSid
{
  /**
   * Specific day of the week.
   */
  const DAY_OF_WEEK = 3;

  /**
   * Specific day per two weeks (bi-weekly).
   */
  const DAY_OF_WEEK_BI_WEEKLY = 4;

  /**
   * The 15th day of each month.
   */
  const FIFTEENTH_DAY_OF_MONTH = 2;

  /**
   * The 1st day of each month.
   */
  const FIRST_DAY_OF_MONTH = 1;
}

?>