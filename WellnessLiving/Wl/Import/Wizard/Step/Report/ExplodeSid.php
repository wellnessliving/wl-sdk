<?php

namespace WellnessLiving\Wl\Import\Wizard\Step\Report;

/**
 * Determines the period that will be processed by one robot.
 *
 * If report has many records in specified time frame that it can be downloaded by smaller pieces.
 * This sid determines size of one piece.
 *
 * Last insert ID: 4.
 */
class ExplodeSid
{
  /**
   * Report will be exploded by months.
   * Each piece of the report will be no more than 30 days.
   */
  const MONTH = 2;

  /**
   * Report will be exploded by half of the year.
   * Each piece of the report will be no more than 180 days.
   */
  const MONTH_6 = 3;

  /**
   * Report will be exploded by weeks.
   * Each piece of the report will be no more than 7 days.
   */
  const WEEK = 1;

  /**
   * Report will be exploded by years.
   * Each piece of the report will be no more than 365 days.
   */
  const YEAR = 4;
}

?>