<?php

namespace WellnessLiving\Wl\Business\Franchise;

/**
 * List of franchisee log in levels to which a user can view/access.
 *
 * Last used ID: 4.
 */
class FranchiseSwitchSid
{
  /**
   * Limits to countries.
   */
  const COUNTRY = 1;

  /**
   * Limits to locations.
   */
  const LOCATION = 2;

  /**
   * Limits to provinces/states.
   */
  const PROVINCE = 3;

  /**
   * Limits to regions.
   */
  const REGION = 4;
}

?>