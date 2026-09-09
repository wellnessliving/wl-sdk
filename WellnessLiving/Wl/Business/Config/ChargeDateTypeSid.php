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
   * Every even week (2nd, 4th, etc.) on a specific day of the week.
   * Derived value for a two-week period {@link ChargeDateTypeSid::DAY_OF_WEEK_BI_WEEKLY}.
   *
   * @deprecated Use {@link ChargeDateTypeSid::DAY_OF_WEEK_BI_WEEKLY} instead.
   *   This constant and usages can be removed after Release 71.
   */
  const EVEN_WEEK = 6;

  /**
   * The 15th day of each month.
   */
  const FIFTEENTH_DAY_OF_MONTH = 2;

  /**
   * The 1st day of each month.
   */
  const FIRST_DAY_OF_MONTH = 1;

  /**
   * Every odd week (1st, 3rd, etc.) on a specific day of the week.
   * Derived value for a two-week period {@link ChargeDateTypeSid::DAY_OF_WEEK_BI_WEEKLY}.
   *
   * @deprecated Use {@link ChargeDateTypeSid::DAY_OF_WEEK_BI_WEEKLY} instead.
   *   This constant and usages can be removed after Release 71.
   */
  const ODD_WEEK = 5;
}

?>