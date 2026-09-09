<?php

namespace WellnessLiving\Core\Cache;

/**
 * Status list for memcache servers.
 */
abstract class MemcacheServerStatusSid
{
  /**
   * Status for active servers.
   */
  const ACTIVE = 1;

  /**
   * Status for failed servers.
   */
  const FAILED = 2;
}

?>