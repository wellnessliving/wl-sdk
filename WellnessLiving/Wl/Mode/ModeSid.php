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
  public const CLASSPASS_BOOKING = 8;

  /**
   * Visit has been crated by Google Booking Service.
   */
  public const GOOGLE_BOOKING = 7;

  /**
   * Visit has been crated by <tt>GymPass</tt>.
   */
  public const GYMPASS_BOOKING = 14;

  /**
   * Visit was created during import.
   */
  public const IMPORT = 5;

  /**
   * Action made via microsite.
   *
   * It is also names as directory listing.
   */
  public const MICROSITE = 12;

  /**
   * Client booked session on My Presence Site.
   */
  public const MY_PRESENCE_SITE = 13;

  /**
   * Staff booked session from spa backend.
   */
  public const SPA_BACKEND = 4;

  /**
   * Client booked session from spa frontend.
   */
  public const SPA_FRONTEND = 3;

  /**
   * Created by system.
   */
  public const SYSTEM = 10;

  /**
   * Means that we did not define mode.
   */
  public const UNDEFINED = 6;

  /**
   * Client booked session from Attendance Web App.
   */
  public const WEB_APP_ATTENDANCE = 16;

  /**
   * Client checked-in for the session through Check-In Web App.
   */
  public const WEB_APP_CHECK_IN = 15;

  /**
   * Staff booked session for client from website backend.
   */
  public const WEB_BACKEND = 2;

  /**
   * Client booked session from website frontend.
   */
  public const WEB_FRONTEND = 1;

  /**
   * Action made via widget (purchase, book etc).
   */
  public const WIDGET = 11;
}

?>