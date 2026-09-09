<?php

namespace WellnessLiving\Wl\Guest;

/**
 * List of purchases types based on who made the purchase.
 *
 * Last used ID: 3.
 */
class PurchaseGuestSid
{
  /**
   * All purchases.
   */
  const PURCHASE_ALL = 1;

  /**
   * Only purchases made by guests.
   */
  const PURCHASE_GUEST = 2;

  /**
   * Only purchases made by user.
   */
  const PURCHASE_USER = 3;
}

?>