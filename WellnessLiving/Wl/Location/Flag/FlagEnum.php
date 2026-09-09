<?php

namespace WellnessLiving\Wl\Location\Flag;

/**
 * Possible types of restrictions for flagged in the location users.
 */
class FlagEnum
{
  /**
   * Clears are restricted to mane reservations.
   */
  const BOOKING = 2;

  /**
   * Clients are restricted to do everything, which is possible to restrict.
   */
  const EVERYTHING = 4;

  /**
   * Clients are not restricted to do anything.
   */
  const NOTHING = 1;

  /**
   * Clients are restricted to make purchase.
   */
  const PURCHASE = 3;
}

?>