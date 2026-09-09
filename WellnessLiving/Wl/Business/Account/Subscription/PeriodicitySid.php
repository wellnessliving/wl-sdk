<?php

namespace WellnessLiving\Wl\Business\Account\Subscription;

/**
 * List of possible payment periodicity.
 */
abstract class PeriodicitySid
{
  /**
   * Payment first month.
   *
   * This option should be hidden from user.
   */
  const HIDDEN_MONTH_FIRST = 3;

  /**
   * Payment first year.
   *
   * This option should be hidden from user.
   */
  const HIDDEN_YEAR_FIRST = 4;

  /**
   * Payment every month.
   *
   * @title Monthly
   */
  const MONTH = 1;

  /**
   * Payment every year.
   *
   * @title Annual
   */
  const YEAR = 2;
}

?>