<?php

namespace WellnessLiving\Wl\Business\Config;

/**
 * Day-of-month options used when statement frequency is {@link AccountStatementFrequencySid::MONTHLY}.
 *
 * Last used ID: 4.
 */
class AccountStatementDayTypeSid
{
  /**
   * Generate on the 15th day of every month.
   */
  const FIFTEENTH_DAY_OF_MONTH = 2;

  /**
   * Generate on the 1st day of every month.
   */
  const FIRST_DAY_OF_MONTH = 1;

  /**
   * Generate on the last day of every month.
   */
  const LAST_DAY_OF_MONTH = 3;

  /**
   * If the configured day does not exist in a given month (e.g. day 31 in February), the last day of that month is used instead.
   */
  const SPECIFIC_DAY = 4;
}

?>