<?php

namespace WellnessLiving\Wl\Business\Policy;

/**
 * Defines if client has "Late cancel" or "No shows" sessions.
 *
 * Last used ID: 3.
 */
class BlameSid
{
  /**
   * If client has "Late cancel" and "No shows" sessions.
   */
  const BOTH = 1;

  /**
   * If client has "Late cancel" sessions.
   */
  const LATE_CANCEL = 2;

  /**
   * If client has "No shows" sessions.
   */
  const NO_SHOWS = 3;
}

?>