<?php

namespace WellnessLiving\Core\Db;

/**
 * Lists database transaction isolation levels.
 *
 * @link https://dev.mysql.com/doc/refman/8.0/en/innodb-transaction-isolation-levels.html
 */
class DbTransactionIsolationLevelSid
{
  /**
   * Each consistent read, even within the same transaction, sets and reads its own fresh snapshot.
   *
   * For locking reads (`SELECT` with `FOR UPDATE` or `FOR SHARE`), `UPDATE` statements, and `DELETE` statements, InnoDB
   * locks only index records, not the gaps before them, and thus permits the free insertion of new records next to
   * locked records. Gap locking is only used for foreign-key constraint checking and duplicate-key checking.
   *
   * Because gap locking is disabled, phantom row problems may occur, as other sessions can insert new rows into the
   * gaps.
   *
   * @link https://dev.mysql.com/doc/refman/8.0/en/innodb-next-key-locking.html 15.7.4 Phantom Rows
   */
  const READ_COMMITTED = 2;

  /**
   * `SELECT` statements are performed in a nonlocking fashion, but a possible earlier version of a row might be used.
   * Thus, using this isolation level, such reads are not consistent. This is also called a dirty read. Otherwise,
   */
  const READ_UNCOMMITTED = 3;

  /**
   * This is the default isolation level for InnoDB. Consistent reads within the same transaction read the snapshot
   * established by the first read. This means that if you issue several plain (nonlocking) `SELECT` statements within
   * the same transaction, these `SELECT` statements are consistent also with respect to each other.
   *
   * @link https://dev.mysql.com/doc/refman/8.0/en/innodb-consistent-read.html 15.7.2.3 Consistent Nonlocking Reads
   */
  const REPEATABLE_READ = 1;

  /**
   * This level is like {@link \Core\Db\DbTransactionIsolationLevelSid::REPEATABLE_READ `REPEATABLE READ`}, but InnoDB
   * implicitly converts all plain `SELECT` statements to `SELECT ... FOR SHARE` if autocommit is disabled.
   * If autocommit is enabled, the `SELECT` is its own transaction. It therefore is known to be read only and can be
   * serialized if performed as a consistent (nonlocking) read and need not block for other transactions.
   * (To force a plain `SELECT` to block if other transactions have modified the selected rows, disable autocommit.)
   */
  const SERIALIZABLE = 4;
}

?>