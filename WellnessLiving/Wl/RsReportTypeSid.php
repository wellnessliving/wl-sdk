<?php

namespace WellnessLiving\Wl;

/**
 * Class describes reports types (table, chart, gauge).
 *
 * Last used ID: 3.
 */
abstract class RsReportTypeSid
{
  /**
   * Chart.
   */
  const CHART = 1;

  /**
   * Gauge.
   */
  const GAUGE = 2;

  /**
   * Table.
   */
  const TABLE = 3;

  /**
   * Year-over-year chart.
   */
  const YOY_CHART = 4;
}

?>