<?php

namespace WellnessLiving\Wl\Sms\Command;

/**
 * A list of SMS-response which can return the client.
 *
 * Last used ID: 4.
 */
class SmsCommandSid
{
  /**
   * Client response "No" to SMS-notification.
   */
  const NO = 4;

  /**
   * Client response "Start" to SMS-notification.
   */
  const START = 3;

  /**
   * Client response "Stop" to SMS-notification.
   */
  const STOP = 2;

  /**
   * Client response "Yes" to SMS-notification.
   */
  const YES = 1;
}

?>