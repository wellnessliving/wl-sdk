<?php

namespace WellnessLiving\Wl\Classes\Edit;

/**
 * Event session enrollment rules.
 */
class EnrollSessionSid
{
  /**
   * All session of the event will be booked by clients and staff members.
   *
   * @title All sessions are booked automatically when purchased
   */
  const ALL = 1;

  /**
   * Individual sessions can be booked by clients and staff members.
   *
   * @title Clients can select which sessions to enroll into after purchasing
   */
  const SESSION_CLIENT = 2;

  /**
   * Individual sessions can be booked by staff members.
   * All session of the event will be booked by clients.
   *
   * @title Clients are enrolled in all sessions, but staff can book individual sessions
   */
  const SESSION_STAFF = 3;
}

?>