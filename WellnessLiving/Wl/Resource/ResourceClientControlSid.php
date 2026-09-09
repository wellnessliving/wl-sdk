<?php

namespace WellnessLiving\Wl\Resource;

/**
 * A list of resource selection type.
 */
class ResourceClientControlSid
{
  /**
   * Means that client cannot select resource during booking process.
   */
  const OFF = 2;

  /**
   * Means that client can select resource during booking process.
   */
  const ON = 1;
}

?>