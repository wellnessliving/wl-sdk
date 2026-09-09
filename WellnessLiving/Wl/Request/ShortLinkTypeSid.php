<?php

namespace WellnessLiving\Wl\Request;

/**
 * List of types for short links.
 *
 * Last ID: 7.
 */
class ShortLinkTypeSid
{
  /**
   * Direct Booking URL.
   */
  const BOOKING = 2;

  /**
   * URL shortened from Marketing to track clicks from marketing campaigns.
   */
  const MARKETING = 6;

  /**
   * URL shortened from Message Center.
   */
  const MESSAGE_CENTER = 4;

  /**
   * Direct Buy URL.
   */
  const PURCHASE = 3;

  /**
   * URL shortened from Quick Contact.
   */
  const QUICK_CONTACT = 5;

  /**
   * Type is undefined.
   */
  const UNDEFINED = 1;

  /**
   * URL shortened from our Unsubscribe page.
   */
  const UNSUBSCRIBE = 7;
}

?>