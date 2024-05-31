<?php

namespace WellnessLiving\Custom\Wl;

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