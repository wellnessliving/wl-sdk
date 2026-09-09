<?php

namespace WellnessLiving\Wl\Google\Booking;

/**
 * List of supported virtual platforms.
 */
class VirtualPlatformSid
{
  /**
   * The merchant is flexible in which video platform they use.
   */
  const FLEXIBLE = 1;

  /**
   * Google hangouts.
   */
  const GOOGLE_HANGOUTS = 2;

  /**
   * Google meet.
   */
  const GOOGLE_MEET = 3;

  /**
   * Should be set if the video platform used is different from the ones mentioned here.
   */
  const OTHER = 7;

  /**
   * Skype.
   */
  const SKYPE = 5;

  /**
   * Youtube.
   */
  const YOUTUBE = 6;

  /**
   * Zoom.
   *
   * @link https://zoom.us
   */
  const ZOOM = 4;
}

?>