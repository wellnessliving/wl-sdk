<?php

namespace WellnessLiving\Wl\Report\Filter\CheckInSource;

/**
 * List of check-in sources.
 * Last ID: 10
 */
class CheckInSourceSid
{
  /**
   * Automatically checked in by the system.
   *
   * @title System
   */
  const AUTO = 1;

  /**
   * Checked in automatically on a Brivo door access granted event.
   *
   * @title Brivo Door Access
   */
  const BRIVO_DOOR_ACCESS = 9;

  /**
   * Checked in via Gym Pass.
   *
   * @title Gympass
   */
  const GYMPASS_BOOKING = 2;

  /**
   * Checked in via Passport.
   *
   * @title Passport Door Access
   */
  const PASSPORT_DOOR_ACCESS = 10;

  /**
   * Staff checked client in through the Elevate app.
   *
   * @title Elevate Staff App
   */
  const SPA_BACKEND = 3;

  /**
   * Client checked in through the Achieve app.
   *
   * @title Achieve Client App
   */
  const SPA_FRONTEND = 4;

  /**
   * Client checked in through the Attendance web app.
   *
   * @title Attendance Web App
   */
  const WEB_APP_ATTENDANCE = 5;

  /**
   * Client checked in through the Check-In web app.
   *
   * @title Self Check-In Web App
   */
  const WEB_APP_CHECK_IN = 6;

  /**
   * Staff checked client in through Staff Back Office.
   *
   * @title Staff Back Office
   */
  const WEB_BACKEND = 7;

  /**
   * Client checked in through the client web app.
   *
   * @title Client Web App
   */
  const WEB_FRONTEND = 8;
}

?>