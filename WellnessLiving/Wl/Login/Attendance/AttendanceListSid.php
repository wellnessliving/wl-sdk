<?php

namespace WellnessLiving\Wl\Login\Attendance;

/**
 * List of attendance list types.
 */
class AttendanceListSid
{
  /**
   * Active attendance list.
   */
  const ACTIVE = 1;

  /**
   * Wait for confirmation from client list.
   */
  const CONFIRM = 3;

  /**
   * Wait list.
   */
  const WAIT = 2;
}

?>