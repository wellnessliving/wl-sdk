<?php

namespace WellnessLiving\Wl\Member\Progress\Config;

/**
 * Available options for the day of the month when the frequency period starts.
 *
 * Last used ID: 5.
 */
class MonthDateSid
{
  /**
   * Starts on the last day of the month.
   *
   * @title starting the last day of the month
   */
  const END = 4;

  /**
   * Starts on initial progress log.
   *
   * @title starting on initial progress log
   */
  const INITIAL = 1;

  /**
   * Starts on the middle of the month.
   *
   * @title starting on the 15th of the month
   */
  const MIDDLE = 3;

  /**
   * Starts on specific day of the month.
   *
   * @title on a specific day of the month
   */
  const SPECIFIC = 5;

  /**
   * Starts on the first day of the month.
   *
   * @title starting on the 1st of the month
   */
  const START = 2;
}

?>