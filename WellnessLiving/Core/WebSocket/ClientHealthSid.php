<?php

namespace WellnessLiving\Core\WebSocket;

/**
 * A list of statuses health of WebSocket client.
 */
class ClientHealthSid
{
  /**
   * After the first disconnect (after it has made the first instant attempt to reconnect).
   */
  const AVERAGE = 2;

  /**
   * After 10 consecutive unsuccessful reconnects.
   */
  const BAD = 3;

  /**
   * After 10 minutes after a successful connection without any disconnections.
   */
  const GOOD = 1;
}

?>