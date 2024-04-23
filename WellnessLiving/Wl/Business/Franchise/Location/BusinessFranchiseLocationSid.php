<?php

namespace WellnessLiving\Wl\Business\Franchise\Location;

/**
 * Types of the location.
 *
 * Used in the {@link BusinessFranchiseLocationModel}.
 */
class BusinessFranchiseLocationSid
{
  /**
   * All locations.
   *
   * @title All
   */
  const ALL = 1;

  /**
   * Locations without the region.
   *
   * @title Without region
   */
  const REGION_NO = 2;

  /**
   * Location with the region.
   *
   * @title With region
   */
  const REGION_YES = 3;
}

?>