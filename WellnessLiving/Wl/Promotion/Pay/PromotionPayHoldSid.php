<?php

namespace WellnessLiving\Wl\Promotion\Pay;

/**
 * Contains a list of schemes of processing of on-hold periods.
 *
 * Last used ID: 4
 */
class PromotionPayHoldSid
{
  /**
   * Mindbody scheme.
   *
   * Payment amounts for all payment periods are the same.
   *
   * Periods containing on-hold days are extended. Payment dates of future periods are moved forward.
   */
  const MINDBODY = 2;

  /**
   * WellnessLiving scheme (default).
   *
   * Payments happen on the same date.
   *
   * Price of periods containing on-hold dates is prorated.
   *
   * Payments fall on an on-hold date are skipped. Skipped payment amount is added to the next payment.
   */
  const WL = 1;

  /**
   * WellnessLiving scheme in which payments that fall on a suspended day, are not skipped.
   * Instead, they are moved to the first active day.
   *
   * @see PromotionPayHoldSid::WL
   */
  const WL_STICK = 3;

  /**
   * Scheme in which payments continue on schedule with standard amount regardless of pauses.
   *
   * Periods containing hold days remain the same length except for the last period before renewal.
   * Hold days are added to the last period before renewal.
   */
  const WL_STRICT_SCHEDULE = 4;
}

?>