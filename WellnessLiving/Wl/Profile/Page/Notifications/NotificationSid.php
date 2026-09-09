<?php

namespace WellnessLiving\Wl\Profile\Page\Notifications;

/**
 * Types of client's notifications.
 *
 * Last used ID: 6.
 */
class NotificationSid
{
  /**
   * Email notifications related to purchases, contracts, and other activity in a client's account.
   */
  const ACCOUNT_MANAGEMENT_EMAIL = 1;

  /**
   * Sms notification related to purchases, contracts, and other activity in a client's account.
   */
  const ACCOUNT_MANAGEMENT_SMS = 2;

  /**
   * Email notifications related to news and updates from the business regarding their services, availability and promotions.
   */
  const NEWS_AND_UPDATES_EMAIL = 3;

  /**
   * SMS notifications related to news and updates from the business regarding their services, availability and promotions.
   */
  const NEWS_AND_UPDATES_SMS = 4;

  /**
   * Email notifications related to the services a client has booked.
   */
  const SCHEDULE_AND_REMINDERS_EMAIL = 5;

  /**
   * SMS notifications related to the services a client has booked.
   */
  const SCHEDULE_AND_REMINDERS_SMS = 6;
}

?>