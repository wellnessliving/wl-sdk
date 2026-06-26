<?php

namespace WellnessLiving\Wl\Video\Watch;

/**
 * List sources of the view video.
 *
 * Last used ID: 4
 */
class WatchSourceSid
{
  /**
   * Video watched from application.
   */
  const APP = 1;

  /**
   * Video watched from direct URL.
   */
  const DIRECT_URL = 2;

  /**
   * Video watched from frontend.
   */
  const FRONTEND = 3;

  /**
   * Source of watched is undefined.
   *
   * Used for old videos.
   */
  const UNDEFINED = 4;
}

?>