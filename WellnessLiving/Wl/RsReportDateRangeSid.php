<?php

namespace WellnessLiving\Wl;

/**
 * Date ranges used in "Quick Status" menu.
 *
 * <h2>!!! ATTENTION !!!</h2>
 *
 * If you change this class, you SHOULD also change JavaScript's RsReportDateRangeSid class.
 */
abstract class RsReportDateRangeSid
{
  /**
   * Range with only one date which is current day.
   */
  const CURRENT_DAY = 8;

  /**
   * Range from the start of a month to current day (including).
   */
  const CURRENT_MONTH = 7;

  /**
   * Range from the start of a quarter to current day (including).
   */
  const CURRENT_QUARTER = 6;

  /**
   * Range from the start of a week to current day (including).
   */
  const CURRENT_WEEK = 13;

  /**
   * Range from the start of a year to current day (including).
   */
  const CURRENT_YEAR = 5;

  /**
   * Range from the start of a previous month to the end of a previous month.
   */
  const LAST_MONTH = 11;

  /**
   * Range from the start of a previous quarter to the end of a previous quarter.
   */
  const LAST_QUARTER = 10;

  /**
   * Range from the start of a previous week to the end of a previous week.
   */
  const LAST_WEEK = 12;

  /**
   * Range from the start of a previous year to the end of a previous year.
   */
  const LAST_YEAR = 9;

  /**
   * Range with last 30 days including current day.
   */
  const PREVIOUS_MONTH = 3;

  /**
   * Range with last 90 days including current day.
   */
  const PREVIOUS_QUARTER = 2;

  /**
   * Range with last 7 days including current day.
   */
  const PREVIOUS_WEEK = 4;

  /**
   * Range with last 365 days including current day.
   */
  const PREVIOUS_YEAR = 1;
}

?>