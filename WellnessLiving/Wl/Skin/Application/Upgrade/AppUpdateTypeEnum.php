<?php

namespace WellnessLiving\Wl\Skin\Application\Upgrade;

/**
 * Enum for application update types used in Google Play and Apple Store releases.
 */
class AppUpdateTypeEnum
{
  /**
   * Major update (3) - for incompatible API changes or major new features.
   */
  const MAJOR = 3;

  /**
   * Minor update (2) - for backward-compatible feature additions.
   */
  const MINOR = 2;

  /**
   * Patch update (1) - for small bug fixes or improvements.
   */
  const PATCH = 1;
}

?>