<?php

namespace WellnessLiving\Wl\Mode;

/**
 * The source of visit.
 *
 * Last used ID: 27.
 */
class ModeSid
{
  /**
   * Registered through <tt>Azure</tt>.
   */
  const AZURE = 21;

  /**
   * Visit has been created by <tt>CENTRED</tt>.
   */
  const CENTRED = 23;

  /**
   * Visit has been created by <tt>ClassPass</tt>.
   */
  const CLASSPASS_BOOKING = 8;

  /**
   * Debt paid via collections.
   */
  const COLLECTIONS = 22;

  /**
   * Debt paid via collections.
   */
  const COLLECTIONS_FUTURE = 26;

  /**
   * Action from Concerto.
   */
  const CONCERTO = 27;

  /**
   * Action made via email.
   */
  const EMAIL = 18;

  /**
   * Indicating that the source is Facebook.
   */
  const FACEBOOK = 20;

  /**
   * Indicating that the source is Google.
   */
  const GOOGLE = 19;

  /**
   * Visit has been created by Google Booking Service.
   */
  const GOOGLE_BOOKING = 7;

  /**
   * Visit has been created by <tt>GymPass</tt>.
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
   * Indicating that the source is Microsoft.
   */
  const MICROSOFT = 24;

  /**
   * Client booked session on My Presence Site.
   */
  const MY_PRESENCE_SITE = 13;

  /**
   * Action made via SMS.
   */
  const SMS = 17;

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

  /**
   * Action from Zapier.
   */
  const ZAPIER = 25;
}

?>