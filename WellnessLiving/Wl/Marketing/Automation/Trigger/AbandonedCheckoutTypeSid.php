<?php

namespace WellnessLiving\Wl\Marketing\Automation\Trigger;

/**
 * Checkout targeting modes for the abandoned checkout trigger.
 */
class AbandonedCheckoutTypeSid
{
  /**
   * Any checkout type.
   */
  const ANY = 1;

  /**
   * Any booking.
   */
  const BOOKING_ANY = 5;

  /**
   * Specific bookings.
   *
   * This value preserves the legacy booking checkout type.
   */
  const BOOKING_SPECIFIC = 3;

  /**
   * Any store purchase.
   */
  const STORE_PURCHASE_ANY = 4;

  /**
   * Specific store purchases.
   *
   * This value preserves the legacy store purchase checkout type.
   */
  const STORE_PURCHASE_SPECIFIC = 2;
}

?>