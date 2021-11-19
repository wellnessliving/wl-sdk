<?php

namespace WellnessLiving;

/**
 * List of available regions.
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
   * Returns a list of region identifiers.
   *
   * @return int[] List of region identifiers.
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