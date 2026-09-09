<?php

namespace WellnessLiving\Wl;

/**
 * Manages mail pages.
 *
 * Last used ID: 5.
 */
abstract class RsMailPageSid
{
  /**
   * Page with business mails.
   */
  const ADMIN_BUSINESS = 4;

  /**
   * Page with automated mails.
   */
  const AUTOMATED_MARKETING = 3;

  /**
   * Page with notifications from business message chat.
   */
  const BUSINESS_SMS_CHAT = 5;

  /**
   * Page with client notification mails.
   */
  const CLIENT_NOTIFICATION = 1;

  /**
   * Page with staff notification mails.
   */
  const STAFF_NOTIFICATION = 2;
}

?>