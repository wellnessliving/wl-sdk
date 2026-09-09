<?php

namespace WellnessLiving\Wl;

/**
 * List of possible ways back from book process page.
 *
 * Last used id: 11
 */
class RsBookProcessBackSid
{
  /**
   * Attendance list of the event.
   */
  const ATTENDANCE = 6;

  /**
   * Dashboard.
   */
  const DASHBOARD = 5;

  /**
   * Booking from directory.
   */
  const DIRECTORY = 3;

  /**
   * Booking from enrollment list.
   */
  const ENROLLMENT_LIST = 11;

  /**
   * Booking from enrollment list.
   */
  const EVENT_LIST = 8;

  /**
   * Booking from microsite.
   */
  const MICROSITE = 2;

  /**
   * Booking from client's profile.
   */
  const PROFILE = 4;

  /**
   * Booking from attendance history. When user pay for not paid visit on attendance history.
   */
  const PROFILE_HISTORY = 9;

  /**
   * Booking from upcoming schedule. When user pay for not paid visit on upcoming schedule.
   */
  const PROFILE_SCHEDULE = 10;

  /**
   * Booking from report about unpaid visits.
   */
  const REPORT_UNPAID_VISIT = 7;

  /**
   * Booking from schedule.
   */
  const SCHEDULE = 1;
}

?>