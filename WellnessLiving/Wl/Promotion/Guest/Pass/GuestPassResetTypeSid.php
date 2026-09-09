<?php

namespace WellnessLiving\Wl\Promotion\Guest\Pass;

/**
 * Guest Pass reset type.
 *
 * Determines how guest pass limits are reset.
 *
 * Last used ID: 2.
 */
class GuestPassResetTypeSid
{
  /**
   * Limits reset on promotion billing day.
   *
   * @title Billing cycle
   */
  const BILLING = 1;

  /**
   * Limits reset on promotion renewal day.
   *
   * @title Renewal cycle
   */
  const RENEWAL = 2;
}

?>