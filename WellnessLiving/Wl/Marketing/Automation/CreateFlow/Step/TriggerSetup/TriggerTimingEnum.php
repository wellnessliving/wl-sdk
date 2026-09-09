<?php

namespace WellnessLiving\Wl\Marketing\Automation\CreateFlow\Step\TriggerSetup;

/**
 * Defines list of timing types for trigger.
 */
class TriggerTimingEnum
{
  /**
   * @title Any time
   */
  const ANY = 1;

  /**
   * @title Early cancellation
   */
  const EARLY = 2;

  /**
   * @title Late cancellation
   */
  const LATE = 3;
}

?>