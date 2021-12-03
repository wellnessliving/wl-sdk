<?php

namespace WellnessLiving;

/**
 * List of available data center regions.
 *
 * The business independently chooses the data center region in which it will be registered.
 * The choice of the data center region does not depend on the actual location of the business.
 * The region determines the data center in which the Wellnessliving system operates.
 * The region should be chosen based on the access speed to the data center from business clients.
 * Business from any region can be registered in any data center, but only in one.
 *
 * All businesses registered before December 2021 belong to the {@link \WellnessLiving\WlRegionSid::US_EAST_1} region.
 *
 * Last ID: 2.
 */
class WlRegionSid
{
  /**
   * Sydney, Australia.
   */
  const AP_SOUTHEAST_2=2;

  /**
   * North Virginia, USA.
   */
  const US_EAST_1=1;

  /**
   * Returns a list of data center region identifiers.
   *
   * @return int[] List of data center region identifiers.
   */
  public static function all()
  {
    return [
      static::US_EAST_1,
      static::AP_SOUTHEAST_2
    ];
  }
}

?>