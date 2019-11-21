<?php

namespace WellnessLiving;

class WlModeSid
{
  /**
   * Visit has been crated by ClassPass.
   */
  const CLASSPASS_BOOKING = 8;

  /**
   * Visit has been crated by Google Booking Service.
   */
  const GOOGLE_BOOKING = 7;

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