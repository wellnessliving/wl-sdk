<?php

namespace WellnessLiving\Wl\Business\RegionTravel;

/**
 * List of business travel step groups.
 */
class TravelStepGroupEnum
{
  /**
   * Group of tasks which clears cache after database travel.
   */
  const CLEAR_CACHE_AFTER = 1;

  /**
   * Group of task that complete business travel.
   */
  const COMPLETE = 3;

  /**
   * Group of tasks which travel denormalized tables.
   */
  const DENORMALIZED = 2;
}

?>