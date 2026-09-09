<?php

namespace WellnessLiving\Core\Zoom;

/**
 * List of recording options.
 *
 * Last used ID: 4.
 */
class MeetingTypeSid
{
  /**
   * Instant meeting.
   */
  const INSTANT = 1;

  /**
   * Recurring meeting with no fixed time.
   */
  const RECURRENT_FIX_NO = 3;

  /**
   * Recurring meeting with fixed time.
   */
  const RECURRENT_FIX_YES = 4;

  /**
   * Scheduled meeting.
   */
  const SCHEDULE = 2;
}

?>