<?php

namespace WellnessLiving\Wl\Book;

/**
 * A list of constants describing the nature of an SDK connection.
 */
abstract class WlBookModeSid
{
  /**
   * Staff booked session from app backend.
   */
  const APP_BACKEND = 4;

  /**
   * Client booked session from app frontend.
   */
  const APP_FRONTEND = 3;

  /**
   * Client booked session on My Presence Site.
   */
  const MY_PRESENCE_SITE = 13;
}