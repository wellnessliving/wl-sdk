<?php

namespace WellnessLiving\Wl\Business\Account\Subscription;

/**
 * List of all entities for which subscription payment could be performed.
 */
abstract class PayEntitySid
{
  /**
   * Subscription payment performed for fixed number of entities.
   */
  const FIXED = 3;

  /**
   * Subscription payment performed per license.
   */
  const LICENCE = 2;

  /**
   * Subscription payment performed per location.
   */
  const LOCATION = 1;
}

?>