<?php

namespace WellnessLiving\Wl\Promotion\Pay;

/**
 * The list of possible actions for promotion payment pause periods.
 *
 * Last ID: 3
 */
class PromotionPayPauseActionSid
{
  /**
   * Hold indefinitely.
   */
  const PAUSE_INDEFINITE = 2;

  /**
   * Hold with exact start and end dates.
   */
  const PAUSE_PERIOD = 1;

  /**
   * Stop current holds and remove future holds.
   */
  const STOP_PAUSE = 3;
}

?>