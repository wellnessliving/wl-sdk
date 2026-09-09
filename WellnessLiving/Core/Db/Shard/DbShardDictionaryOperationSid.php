<?php

namespace WellnessLiving\Core\Db\Shard;

/**
 * A list of operations that populated from a dictionary referenced by a sharded table from the main database to all
 * shards.
 */
class DbShardDictionaryOperationSid
{
  /**
   * A row was deleted from the dictionary in the main database.
   */
  const DELETE = 2;

  /**
   * A row was inserted into the dictionary in the main database.
   */
  const INSERT = 1;
}

?>