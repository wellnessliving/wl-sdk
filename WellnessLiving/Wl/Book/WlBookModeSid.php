<?php

namespace WellnessLiving\Wl\Book;

/**
 * A list of constants describing the nature of an SDK connection.
 */
abstract class WlBookModeSid
{
  /**
   * A staff member booked the session from the app's backend.
   */
  const APP_BACKEND = 4;

  /**
   * A client booked the session from the app's frontend.
   */
  const APP_FRONTEND = 3;

  /**
   * A client booked the session on the My Presence Site.
   */
  const MY_PRESENCE_SITE = 13;
}