<?php

namespace WellnessLiving\Wl\Business\Trial;

/**
 * Possible actions after trial expiration.
 */
class TrialExpireEnum
{
  /**
   * Converts trial to a paid subscription.
   */
  const CONVERT = 2;

  /**
   * Interrupts access to the business due to subscription is not active.
   */
  const INTERRUPT = 1;
}

?>