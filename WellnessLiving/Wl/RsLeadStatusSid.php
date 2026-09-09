<?php

namespace WellnessLiving\Wl;

/**
 * Statuses for lead management.
 *
 * Last used ID: 4.
 */
abstract class RsLeadStatusSid
{
  /**
   * Active clients.
   */
  const ACTIVE = 1;

  /**
   * Clients without interest.
   */
  const LEAVE = 3;

  /**
   * New clients.
   */
  const NEWCOMER = 2;
}

?>