<?php

namespace WellnessLiving\Studio\Build;

/**
 * List of actions applicable to studio build.
 */
class BuildActionSid
{
  /**
   * Kill build execution. Applicable only to builds that are active.
   */
  const KILL = 1;

  /**
   * Skip build execution. Applicable only to builds that are in queue.
   */
  const SKIP = 2;
}

?>