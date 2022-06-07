<?php

namespace WellnessLiving\Wl\Mode;

/**
 * The source of visit.
 *
 * Last used ID: 16.
 */
class ModeSid
{
  /**
   * Visit has been created by ClassPass.
   */
  const CLASSPASS_BOOKING = 8;

  /**
   * Visit has been crated by Google Booking Service.
   */
  const GOOGLE_BOOKING = 7;

  /**
   * Visit has been crated by <tt>GymPass</tt>.
   */
  const GYMPASS_BOOKING = 14;

  /**
   * Visit was created during import.
   */
  const IMPORT = 5;

  /**
   * Action made via microsite.
   *
   * It is also names as directory listing.
   */
  const MICROSITE = 12;

  /**
   * Client booked session on My Presence Site.
   */
  const MY_PRESENCE_SITE = 13;

  /**
   * Staff booked session from spa backend.
   */
  const SPA_BACKEND = 4;

  /**
   * Client booked session from spa frontend.
   */
  const SPA_FRONTEND = 3;

  /**
   * Created by system.
   */
  const SYSTEM = 10;

  /**
   * Means that we did not define mode.
   */
  const UNDEFINED = 6;

  /**
   * Client booked session from Attendance Web App.
   */
  const WEB_APP_ATTENDANCE = 16;

  /**
   * Client checked-in for the session through Check-In Web App.
   */
  const WEB_APP_CHECK_IN = 15;

  /**
   * Staff booked session for client from website backend.
   */
  const WEB_BACKEND = 2;

  /**
   * Client booked session from website frontend.
   */
  const WEB_FRONTEND = 1;

  /**
   * Action made via widget (purchase, book etc).
   */
  const WIDGET = 11;
}

?>