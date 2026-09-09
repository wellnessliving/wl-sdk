<?php

namespace WellnessLiving\Wl\Business\Config;

/**
 * Statement generation frequency options for Account Statements setting.
 *
 * Last used ID: 3.
 */
class AccountStatementFrequencySid
{
  /**
   * Generate statements every two weeks on a configured day of the week.
   */
  const BI_WEEKLY = 3;

  /**
   * Generate statements once a month on a configured day.
   */
  const MONTHLY = 1;

  /**
   * Generate statements once a week on a configured day of the week.
   */
  const WEEKLY = 2;
}

?>