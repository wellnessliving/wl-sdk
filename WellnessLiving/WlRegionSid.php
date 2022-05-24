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
 * Last ID: 2.
 */
class WlRegionSid
{
  /**
   * Sydney, Australia.
   */
  public const AP_SOUTHEAST_2=2;

  /**
   * North Virginia, USA.
   */
  public const US_EAST_1=1;

  /**
   * Returns a list of data center region identifiers.
   *
   * @return int[] List of data center region identifiers.
   */
  public static function all(): array
  {
    return [
      static::US_EAST_1,
      static::AP_SOUTHEAST_2
    ];
  }
}

?>