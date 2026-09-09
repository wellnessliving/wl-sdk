<?php

namespace WellnessLiving\Core\Push;

/**
 * List of statuses of push notification.
 *
 * Last ID: 4.
 */
class StatusSid
{
  /**
   * Push-notification was not sent because of an error.
   * This state set if sending of push notification fails for all devices.
   */
  const FAIL = 3;

  /**
   * Push-notification is scheduled on the future.
   */
  const FUTURE = 4;

  /**
   * Push-notification is pending.
   * This is initial state of the push notification it set to history before actual sending.
   * After sending push notification
   */
  const PENDING = 1;

  /**
   * Push-notification was sent successfully.
   * This state set if sending of push notification success at least for one device.
   */
  const SUCCESS = 2;
}

?>