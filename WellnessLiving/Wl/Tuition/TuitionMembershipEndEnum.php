<?php

namespace WellnessLiving\Wl\Tuition;

/**
 * List of end rules for memberships within tuition.
 */
class TuitionMembershipEndEnum
{
  /**
   * Membership ends when the connected event ends.
   */
  const EVENT_END = 1;

  /**
   * Membership ends according to the membership setup.
   */
  const MEMBERSHIP_SETUP = 2;
}

?>