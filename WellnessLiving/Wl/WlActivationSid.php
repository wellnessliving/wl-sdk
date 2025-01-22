<?php

namespace WellnessLiving\Wl;

/**
 * Promotion or package date start rule.
 *
 * sale - date start is a date of the sale.
 * redeem - date start is a date of the first client visit by this promotion or package.
 * fixed - date start is fixed by promotion or package settings and saved in DB.
 */
abstract class WlActivationSid
{
  /**
   * Number of a day of the month or of the week.
   */
  const DAY = 7;

  /**
   * Custom date.
   */
  const FIXED = 3;

  /**
   * The first day of month.
   */
  const MONTH_FIRST = 4;

  /**
   * The 15th day of the month.
   */
  const MONTH_HALF = 6;

  /**
   * The last day of the month.
   */
  const MONTH_LAST = 5;

  /**
   * Date of the sale.
   */
  const SALE = 1;

  /**
   * Date of the first visit.
   */
  const VISIT = 2;
}

?>