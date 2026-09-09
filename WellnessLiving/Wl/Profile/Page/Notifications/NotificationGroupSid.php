<?php

namespace WellnessLiving\Wl\Profile\Page\Notifications;

/**
 * Groups of notifications.
 *
 * Last ID: 3.
 */
class NotificationGroupSid
{
  /**
   * Notifications related to purchases, contracts, and other activity in a client's account.
   */
  const ACCOUNT_MANAGEMENT = 1;

  /**
   * Notifications related to news and updates from the business regarding their services, availability and promotions.
   */
  const NEWS_AND_UPDATES = 2;

  /**
   * Notifications related to the services a client has booked.
   */
  const SCHEDULE_AND_REMINDERS = 3;
}

?>