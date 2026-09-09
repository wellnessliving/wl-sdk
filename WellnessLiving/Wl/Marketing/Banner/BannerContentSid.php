<?php

namespace WellnessLiving\Wl\Marketing\Banner;

/**
 * Identifier constants for Marketing Suite banner content variants.
 *
 * Each constant defines a page-specific version of the promotional banner
 * with different title, description, and feature highlights.
 *
 * Last used id: 4.
 */
class BannerContentSid
{
  /**
   * Client groups settings page banner.
   *
   * Focuses on lead tracking and automated follow-up features.
   */
  const CLIENT_GROUP = 1;

  /**
   * Email settings page banner.
   *
   * Focuses on email marketing capabilities.
   */
  const EMAIL_SETTINGS = 2;

  /**
   * Lead management page banner.
   *
   * Focuses on lead conversion and tracking features.
   */
  const LEAD_MANAGEMENT = 3;

  /**
   * Quick contact popup banner (email, push, SMS).
   *
   * Focuses on smarter sending and campaign features.
   */
  const QUICK_CONTACT = 4;
}

?>