<?php

namespace WellnessLiving\Wl\Business\Sms\Chat\MessageType;

/**
 * Define message type of SMS.
 *
 * Last ID: 4.
 */
class MessageTypeEnum
{
  /**
   * Failed message, can be of type client notifications, campaigns, or manual SMS.
   */
  const FAILED_MESSAGES = 4;

  /**
   * SMS messages that were sent either by the client.
   */
  const MANUAL = 1;

  /**
   * SMS generated from the Automated Marketing module.
   */
  const MARKETING = 2;

  /**
   * SMS generated from the Setup > Client Notifications module.
   */
  const NOTIFICATIONS = 3;
}

?>