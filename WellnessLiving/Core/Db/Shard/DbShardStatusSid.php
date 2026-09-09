<?php

namespace WellnessLiving\Core\Db\Shard;

/**
 * Represents a list of statuses in which database shard may be.
 */
class DbShardStatusSid
{
  /**
   * Database shard is active.
   */
  const ACTIVE = 1;

  /**
   * Shard is being deleted.
   */
  const DELETE = 3;

  /**
   * Database shard is being moved between physical servers.
   *
   * During this, shard can not be accessed in any way.
   */
  const MOVE = 2;
}

?>