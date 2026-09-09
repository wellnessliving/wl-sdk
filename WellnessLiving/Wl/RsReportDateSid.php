<?php

namespace WellnessLiving\Wl;

/**
 * A list of possible report date ranges.
 *
 * Last used ID: 6
 */
abstract class RsReportDateSid
{
  /**
   * Report for the current day.
   */
  const DAY = 1;

  /**
   * Report for the current Month.
   */
  const MONTH = 3;

  /**
   * Report for the current Quarter.
   */
  const QUARTER = 7;

  /**
   * The range is selected manually.
   */
  const RANGE = 5;

  /**
   * Report for the current week.
   */
  const WEEK = 2;

  /**
   * Report for the current year.
   */
  const YEAR = 4;

  /**
   * Report in the range of 10 years from the current year.
   */
  const YOY = 6;
}

?>