<?php

namespace WellnessLiving\Wl\Import\Custom;

/**
 * List of available time formats.
 *
 * Last used ID: 2
 */
abstract class CustomTimeSid
{
  /**
   * 12 hour time format.
   * <tt>hh:mm:ss (am|pm)</tt>
   */
  const TIME_12H = 1;

  /**
   * 24 hour time format.
   * <tt>hh:mm:ss</tt>
   */
  const TIME_24H = 2;
}

?>