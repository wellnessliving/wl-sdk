<?php

namespace WellnessLiving\Wl;

/**
 * List of possible ways to solve a conflict.
 */
class RsAppointmentEditConflictSid
{
  /**
   * Create an event with other staff, date or time.
   */
  const EDIT = 3;

  /**
   * Ignore this conflict and create event as it is.
   */
  const IGNORE = 1;

  /**
   * Do not create conflicted event.
   */
  const SKIP = 2;
}

?>