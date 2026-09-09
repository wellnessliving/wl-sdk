<?php

namespace WellnessLiving\Wl\Business\Policy;

/**
 * Wait List promotion setting.
 */
class BusinessPolicyWaitListPromotionEnum
{
  /**
   * Clients are promoted automatically in the order they joined the wait list.
   */
  const AUTOMATIC_PROMOTION = 1;

  /**
   * All clients are notified at once. The first to confirm is promoted.
   */
  const FASTEST_RESPONSE = 2;

  /**
   * Clients are notified in the order they joined the wait list and must confirm.
   */
  const PRIORITY_CONFIRMATION = 3;
}

?>