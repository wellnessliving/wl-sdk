<?php

namespace WellnessLiving\Wl\Promotion;

/**
 * Cancel policy for cancel memberships.
 *
 * Last used ID: 3
 */
class CancelPolicySid
{
  /**
   * Clients can use remaining visits after membership cancellation.
   */
  const USE_CLIENT = 1;

  /**
   * Clients cannot use remaining visits after membership cancellation.
   */
  const USE_NONE = 2;

  /**
   * Staff member can choose whether a client can use remaining visits after membership cancellation.
   */
  const USE_STAFF = 3;
}

?>