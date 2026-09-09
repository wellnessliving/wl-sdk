<?php

namespace WellnessLiving\Studio\Ip;

/**
 * How long can access to this IP address persist in a case user does not accesses from it to studio.
 */
abstract class TimeoutSid
{
  /**
   * One hour.
   *
   * Public networks, mobile networks.
   *
   * @title One hour (public, mobile network)
   */
  const HOUR = 1;

  /**
   * Static IP address.
   *
   * @title One month (static IP address)
   */
  const MONTH = 3;

  /**
   * One week.
   *
   * Short-term static IP address.
   *
   * @title One week (short-term IP address)
   */
  const WEEK = 2;
}

?>