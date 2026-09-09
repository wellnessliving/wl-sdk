<?php

namespace WellnessLiving\Core\WebSocket;

/**
 * Represents a list of statuses in which a channel may be.
 */
class ChannelStatusSid
{
  /**
   * Subscription is active.
   *
   * @title Active
   */
  const ACTIVE = 1;

  /**
   * Object of this channel contains a data block.
   *
   * @title Data block
   */
  const DATA = 2;

  /**
   * Subscription is not established.
   *
   * @title Inactive
   */
  const INACTIVE = 3;

  /**
   * A new subscription is being established now.
   *
   * @title Subscribing
   */
  const SUBSCRIBING = 4;
}

?>