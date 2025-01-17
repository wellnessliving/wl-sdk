<?php

namespace WellnessLiving\Wl\Report;

/**
 * Describes reports grouping dates ranges.
 *
 * Last identifier: 5.
 */
abstract class WlReportGroupSid
{
  /**
     * Step 1 day.
     */
  const DAY = 1;

  /**
     * Step 1 hour.
     */
  const HOUR = 5;

  /**
     * Step 1 month.
     */
  const MONTH = 3;

  /**
     * Step 1 week.
     */
  const WEEK = 2;

  /**
     * Step 1 year.
     */
  const YEAR = 4;
}

?>