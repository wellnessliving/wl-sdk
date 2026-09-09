<?php

namespace WellnessLiving\Wl\Business\Account\Subscription;

/**
 * List of possible payment periodicity.
 */
abstract class PeriodicitySid
{
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