<?php

namespace WellnessLiving;

/**
 * Class to process string identifiers for duration types.
 */
class WlDurationTypeSid
{
  /**
   * Specific date. Example, 2013-12-24.
   */
  const DATE = 2;

  /**
   * No ending date.
   */
  const ETERNAL = 3;

  /**
   * Examples: 12 days, 2 months, 2 hours etc.
   */
  const PERIOD = 1;
}
?>