<?php

namespace WellnessLiving;

/**
 * Purchase restrictions.
 *
 * Last used ID: 3.
 */
class WlPurchaseRestrictionSid
{
  /**
   * Purchase option available for all clients.
   */
  const ALL = 1;

  /**
   * Purchase option introductory offer, available for new clients only.
   */
  const INTRODUCTORY = 2;

  /**
   * Purchase option available for clients with special login type.
   */
  const TYPE = 3;
}
?>