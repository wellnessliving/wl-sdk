<?php

namespace WellnessLiving\Wl\Business\Promote;

/**
 * List of possible systems for promote.
 */
class PromoteEnum
{
  /**
   * Promote to Class Pass system.
   *
   * This promotion allows businesses to offer services via Class Pass platform.
   */
  const CP = 3;

  /**
   * Promote to Explorer.
   *
   * This promotion allows businesses to be listed in the Explorer directory.
   */
  const EXPLORER = 1;

  /**
   * Promote to Google.
   *
   * This promotion allows businesses to offer services via Reserve with Google platform.
   */
  const RWG = 2;

  /**
   * Promote to Spivi system.
   *
   * This promotion allows businesses to offer services via Spivi platform.
   */
  const SPIVI = 5;

  /**
   * Promote to the Virtual.
   *
   * This promotion allows businesses to offer virtual services.
   */
  const VIRTUAL = 6;

  /**
   * Promote to Welllhub system.
   *
   * This promotion allows businesses to offer services via Wellhub platform.
   */
  const WELLHUB = 4;
}

?>