<?php

namespace WellnessLiving\Wl\Business\Policy;

/**
 * Client's charge if he has "Late cancel" or "No shows" sessions.
 *
 * Last used ID: 2.
 */
class ChargeSid
{
  /**
   * The client should be to pay a penalty.
   */
  const CHARGE = 1;

  /**
   * Mark account as has "Late cancel" and "No shows" sessions.
   */
  const FLAG_ACCOUNT = 2;
}

?>