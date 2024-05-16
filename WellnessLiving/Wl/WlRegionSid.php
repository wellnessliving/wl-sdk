<?php

namespace WellnessLiving\Wl;

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
class WlRegionSid extends \WellnessLiving\Custom\Wl\WlRegionSid
{
  /**
   * Sydney, Australia.
   */
  const AP_SOUTHEAST_2 = 2;

  /**
   * North Virginia, USA.
   */
  const US_EAST_1 = 1;
}

?>