<?php

namespace WellnessLiving\Core\a;

/**
 * A class for managing time intervals.
 * Last ID: 8.
 */
abstract class ADurationSid
{
  /**
   * Days.
   *
   * @title Day
   */
  const DAY = 4;

  /**
   * Hours.
   *
   * @title Hour
   */
  const HOUR = 3;

  /**
   * Minutes.
   *
   * @title Minute
   */
  const MINUTE = 2;

  /**
   * Months.
   *
   * @title Month
   */
  const MONTH = 5;

  /**
   * Seconds.
   *
   * @title Second
   */
  const SECOND = 1;

  /**
   * Weeks (7 days).
   *
   * @title Week
   */
  const WEEK = 7;

  /**
   * Foursome of weeks (28 days).
   *
   * @title 4 Weeks
   */
  const WEEK4 = 8;

  /**
   * Years.
   *
   * @title Year
   */
  const YEAR = 6;
}

?>