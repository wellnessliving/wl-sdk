<?php

namespace WellnessLiving\Wl;

/**
 * List of possible pay roles.
 *
 * Last used ID: 6.
 */
abstract class RsStaffPaySid
{
  /**
   * <tt>Pay Per Client</tt> pay role.
   */
  const CLIENT = 1;

  /**
   * <tt>Commission</tt> pay role.
   */
  const COMMISSION = 2;

  /**
   * <tt>Pay Per Event</tt> pay role.
   */
  const EVENT = 3;

  /**
   * <tt>Hourly</tt> pay role.
   */
  const HOUR = 4;

  /**
   * <tt>Pay Per Client Range<tt> pay role.
   */
  const RANGE = 5;

  /**
   * <tt>Tiered Pay Per Client Range<tt> pay role.
   */
  const TIERED_RANGE = 6;
}

?>