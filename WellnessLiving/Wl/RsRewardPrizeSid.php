<?php

namespace WellnessLiving\Wl;

/**
 * List of rewards prize types.
 *
 * Last used ID: 8
 */
abstract class RsRewardPrizeSid
{
  /**
   * Award Custom Prize.
   */
  const CUSTOM = 6;

  /**
   * Award Percentage or Flat Discounts on Items for Sale.
   */
  const DISCOUNT = 2;

  /**
   * Award Free Classes/Appointments/Workshops/Enrollments/Events.
   */
  const FREE_ITEM = 1;

  /**
   * Award Membership
   */
  const MEMBERSHIP = 7;
}

?>