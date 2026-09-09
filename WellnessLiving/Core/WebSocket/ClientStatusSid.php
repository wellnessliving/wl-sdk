<?php

namespace WellnessLiving\Core\WebSocket;

/**
 * A list of statuses of WebSocket client.
 */
class ClientStatusSid
{
  /**
   * Connection is successfully established.
   */
  const ACTIVE = 1;

  /**
   * Connection is being authenticated now.
   */
  const AUTHENTICATING = 4;

  /**
   * Connection is being established now.
   */
  const CONNECTING = 3;

  /**
   * Client was created, but connection was not established.
   */
  const INACTIVE = 2;
}

?>