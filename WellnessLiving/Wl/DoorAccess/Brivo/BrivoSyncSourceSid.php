<?php

namespace WellnessLiving\Wl\DoorAccess\Brivo;

/**
 * Contains Brivo synchronization action sources. Each constant presents source of action,
 * for now possible four cases:
 *  - Manual connect to Brivo and manual disconnect on landing page;
 *  - Manual enable\disable access to Brivo in group's settings.
 * Last used ID: 4.
 */
class BrivoSyncSourceSid
{
  /**
   * Connect to Brivo.
   */
  const CONNECT = 1;

  /**
   * Disconnect Brivo.
   */
  const DISCONNECT = 2;

  /**
   * Turn-off for client group relation with Brivo group.
   */
  const GROUP_ACCESS_BRIVO_DISABLE = 4;

  /**
   * Turn-on for client group relation with Brivo group.
   */
  const GROUP_ACCESS_BRIVO_ENABLE = 3;
}

?>