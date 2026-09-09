<?php

namespace WellnessLiving\Core\Zoom;

/**
 * List of meeting statuses.
 *
 * Last used ID: 3.
 */
class MeetingStatusSid
{
  /**
   * Meeting currently active.
   */
  const STARTED = 1;

  /**
   * Unknown status.
   */
  const UNKNOWN = 2;

  /**
   * Meeting is created but not active.
   */
  const WAITING = 3;
}

?>