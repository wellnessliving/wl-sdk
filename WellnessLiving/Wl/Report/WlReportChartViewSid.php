<?php

namespace WellnessLiving\Wl\Report;

/**
 * Describes charts types (bar, line, area) and chart modes.
 */
abstract class WlReportChartViewSid
{
  /**
   * Area chart.
   */
  const AREA = 2;

  /**
   * Column chart.
   */
  const COLUMN = 1;

  /**
   * Donut chart.
   */
  const DONUT = 5;

  /**
   * Line chart.
   */
  const LINE = 3;

  /**
   * Year-by-year comparisons in the column chart.
   */
  const YEAR_COLUMN = 4;
}

?>