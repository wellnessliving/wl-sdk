<?php

namespace WellnessLiving\Wl\Review\ReviewList;

/**
 * List of possible order for gets review.
 */
class ReviewOrderSid
{
  /**
   * Ascending sort review by date.
   */
  const LATEST = 1;

  /**
   * Ascending sort review by date.
   */
  const NEGATIVE = 3;

  /**
   * Descending sort review by date.
   */
  const OLDEST = 4;

  /**
   * Descending sort review by date.
   */
  const POSITIVE = 2;
}

?>