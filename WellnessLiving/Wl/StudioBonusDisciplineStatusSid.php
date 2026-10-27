<?php

namespace WellnessLiving\Wl;

/**
 * A set of discipline bonus statuses.
 */
abstract class StudioBonusDisciplineStatusSid
{
  /**
   * Bonus can not be paid, bonus conditions are not met.
   */
  const NO = 2;

  /**
   * Bonus is not yet paid, but conditions are not violated, and payment is possible.
   */
  const POSSIBLE = 3;

  /**
   * Bonus is paid already.
   */
  const YES = 1;
}

?>