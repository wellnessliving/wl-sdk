<?php

namespace WellnessLiving\Core;

/**
 * Refers and evaluates different date/time periods.
 */
abstract class ADateSid
{
  /**
   * Day next after a specific day.
   */
  const DAY_NEXT = 1;

  /**
   * Day previous to a specific day.
   */
  const DAY_PREVIOUS = 2;

  /**
   * Specific day.
   */
  const DAY_THIS = 3;

  /**
   * Hour next to a specific hour.
   */
  const HOUR_NEXT = 4;

  /**
   * Hour previous to a specific hour.
   */
  const HOUR_PREVIOUS = 5;

  /**
   * A specific hour.
   */
  const HOUR_THIS = 6;

  /**
   * Minute next to a specific minute.
   */
  const MINUTE_NEXT = 7;

  /**
   * Minute previous to a specific minute.
   */
  const MINUTE_PREVIOUS = 8;

  /**
   * A specific minute.
   */
  const MINUTE_THIS = 9;

  /**
   * Month next to a specific month.
   */
  const MONTH_NEXT = 10;

  /**
   * Month previous to a specific month.
   */
  const MONTH_PREVIOUS = 11;

  /**
   * A specific month.
   */
  const MONTH_THIS = 12;

  /**
   * Quarter (4 months) next to a specific quarter.
   */
  const QUARTER_NEXT = 13;

  /**
   * Quarter (4 months) previous to a specific quarter.
   */
  const QUARTER_PREVIOUS = 14;

  /**
   * A specific quarter.
   */
  const QUARTER_THIS = 15;

  /**
   * Week next to a specific week.
   */
  const WEEK_NEXT = 19;

  /**
   * Week previous to a specific week.
   */
  const WEEK_PREVIOUS = 20;

  /**
   * A specific week.
   */
  const WEEK_THIS = 21;

  /**
   * Year next to a specific year.
   */
  const YEAR_NEXT = 16;

  /**
   * Year previous to a specific year.
   */
  const YEAR_PREVIOUS = 17;

  /**
   * A specific year.
   */
  const YEAR_THIS = 18;
}

?>