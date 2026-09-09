<?php

namespace WellnessLiving\Core\Db\Shard;

/**
 * Represents a list of modes of transactions performed on a sharded database.
 */
class DbShardTransactionModeSid
{
  /**
   * Transaction is performed as a set of individual tasks.
   *
   * It is allowed that this method execute just individual SQL queries without a database transaction.
   * If a transaction is created inside, this transaction is completely independent on transactions executed at other
   * shards.
   *
   * See <tt>namespace.Core/Db/Shard/doc/sharding-transaction-simple.md</tt> for discussion of this type of
   * transactions.
   */
  const SIMPLE = 1;

  /**
   * Transaction is performed as a distributed transaction.
   *
   * @deprecated Not deprecated. Just not implemented. Reserved for future use.
   * @link https://dev.mysql.com/doc/refman/8.0/en/xa.html
   */
  const XA = 2;
}

?>