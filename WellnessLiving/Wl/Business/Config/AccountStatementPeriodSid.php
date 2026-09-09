<?php

namespace WellnessLiving\Wl\Business\Config;

/**
 * Date range covered by an automatically generated account statement.
 *
 * Last used ID: 9.
 */
class AccountStatementPeriodSid
{
  /**
   * The 14 days ending the day before the generation date.
   */
  const LAST_14_DAYS = 6;

  /**
   * The 30 days ending the day before the generation date.
   */
  const LAST_30_DAYS = 7;

  /**
   * The 7 days ending the day before the generation date.
   */
  const LAST_7_DAYS = 5;

  /**
   * The 90 days ending the day before the generation date.
   */
  const LAST_90_DAYS = 8;

  /**
   * Full calendar month immediately before the generation date.
   */
  const LAST_MONTH = 1;

  /**
   * From the first day of the previous calendar month up to and including all activity
   *     that occurred before the statement was generated on the generation date.
   */
  const LAST_MONTH_TO_DATE = 2;

  /**
   * From the creation date of the most recent automatically generated statement up to the day
   *     before the current automatic generation date.
   *     When no previous automatic statement exists, falls back to one full generation interval
   *     before the current generation date.
   *     Manually generated statements are excluded when determining the last statement date.
   */
  const LAST_STATEMENT_DATE = 9;

  /**
   * Full calendar week immediately before the generation date.
   */
  const LAST_WEEK = 3;

  /**
   * From the first day of the previous calendar week (Monday) up to and including all activity
   *     that occurred before the statement was generated on the generation date.
   */
  const LAST_WEEK_TO_DATE = 4;
}

?>