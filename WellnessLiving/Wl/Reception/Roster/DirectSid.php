<?php

namespace WellnessLiving\Wl\Reception\Roster;

/**
 * List of places to redirect user from attendance list after inactivity.
 */
class DirectSid
{
  /**
   * Redirect user to recently viewed class.
   */
  const RECENT = 1;

  /**
   * Redirect user to upcoming schedule.
   */
  const SCHEDULE = 2;
}

?>