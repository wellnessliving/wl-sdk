<?php

namespace WellnessLiving\Wl\DoorAccess\Brivo;

/**
 * Sync states of WL user with Brivo user.
 */
class BrivoUserSynchronizationSid
{
  /**
   * Wl client is not take a part in synchronization with Brivo. Client was excluded from synchronization with Brivo.
   * One of reasons is deleting Brivo client which related with WL client, so no any to synchronize.
   */
  const OUT_OF_SYNCHRONIZATION = 2;

  /**
   * Wl client is synchronized with Brivo user.
   */
  const SYNCHRONIZED = 1;
}

?>