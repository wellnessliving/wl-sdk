<?php

namespace WellnessLiving\Wl;

/**
 * List of available pages in directories.
 *
 * Last used ID: 13
 */
abstract class RsDirectoryPageSid
{
  /**
   * Page with additional information about the directory.
   */
  const ABOUT = 6;

  /**
   * Page with proposition to win membership.
   */
  const BANNER = 8;

  /**
   * Page to buy a gift card.
   */
  const COUPON = 11;

  /**
   * Main page for users from facebook.
   */
  const FACEBOOK = 4;

  /**
   * Directory catalog by countries, regions and cities.
   */
  const GEO = 9;

  /**
   * Main page with top locations, main information.
   */
  const INDEX = 1;

  /**
   * List of all locations with a map.
   */
  const LOCATION = 2;

  /**
   * Load more locations after "Show More" is pressed.
   */
  const LOCATION_MORE = 7;

  /**
   * Main page with top locations, main information. Alias for index page.
   */
  const MAIN = 5;

  /**
   * Page for partners.
   */
  const PARTNER = 13;

  /**
   * Praise page.
   */
  const PRAISE = 12;

  /**
   * Information about reward program.
   */
  const REWARD = 10;

  /**
   * List of all classes with a map.
   */
  const SCHEDULE = 3;
}

?>