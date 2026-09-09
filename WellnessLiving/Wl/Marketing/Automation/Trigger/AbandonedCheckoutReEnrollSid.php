<?php

namespace WellnessLiving\Wl\Marketing\Automation\Trigger;

/**
 * Re-enrollment modes for abandoned checkout trigger.
 */
class AbandonedCheckoutReEnrollSid
{
  /**
   * Re-enroll after reset period.
   */
  const AFTER_RESET_PERIOD = 3;

  /**
   * Re-enroll on every abandonment.
   */
  const EVERY_ABANDONMENT = 2;

  /**
   * Re-enroll only once.
   */
  const ONLY_ONCE = 1;
}

?>