<?php

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
  public const DAY = 7;

  /**
   * Custom date.
   */
  public const FIXED = 3;

  /**
   * The first day of month.
   */
  public const MONTH_FIRST = 4;

  /**
   * The 15th day of the month.
   */
  public const MONTH_HALF = 6;

  /**
   * The last day of the month.
   */
  public const MONTH_LAST = 5;

  /**
   * Date of the sale.
   */
  public const SALE = 1;

  /**
   * Date of the first visit.
   */
  public const VISIT = 2;

}

?>