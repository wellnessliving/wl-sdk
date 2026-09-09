<?php

namespace WellnessLiving\Wl\Import\Process\Path;

/**
 * States of the step in import.
 */
class ProcessPathSid
{
  /**
   * Import stuck on this step for some reasons.
   */
  const BLOCK = 4;

  /**
   * Step has been completed.
   */
  const COMPLETE = 3;

  /**
   * Current step.
   */
  const CURRENT = 1;

  /**
   * Upcoming steps.
   */
  const FUTURE = 2;
}

?>