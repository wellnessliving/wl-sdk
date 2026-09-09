<?php

namespace WellnessLiving\Wl\Visit\Notification\Sent;

/**
 * A list of SMS-notifications sent to the client on his visits.
 *
 * Last used ID: 2.
 */
class NotificationSentSid
{
  /**
   * This type of sms letter is sent when a client moved from one attendance list to another.
   * For example type of the client notification: Class Wait List Promotion (Client Confirmation Required).
   */
  const PROMOTE = 1;

  /**
   * This type of sms letter is sent before service start.
   * For example type of the client notification: Appointment Reminder (Client).
   */
  const REMINDER = 2;
}

?>