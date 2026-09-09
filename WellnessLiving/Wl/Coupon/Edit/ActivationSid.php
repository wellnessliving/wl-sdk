<?php

namespace WellnessLiving\Wl\Coupon\Edit;

/**
 * Coupon date start rule.
 * sale - date start is a date of the sale
 * fixed - date start is fixed by coupon settings
 */
abstract class ActivationSid
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
   * Date of the sale.
   */
  const SALE = 1;
}

?>