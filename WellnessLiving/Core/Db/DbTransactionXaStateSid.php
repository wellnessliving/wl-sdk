<?php

namespace WellnessLiving\Core\Db;

/**
 * Contains a list of XA transaction states.
 *
 * @link https://dev.mysql.com/doc/refman/8.0/en/xa-states.html
 */
class DbTransactionXaStateSid
{
  /**
   * When a transaction is just created with `XA START` statement, it is put in the `ACTIVE` state.
   *
   * SQL statements that make up the transaction are issued when the transaction is in this state.
   *
   * When transaction completes, issue an `XA END` statement to put the transaction in the `IDLE` state.
   */
  const ACTIVE = 1;

  /**
   * XA transaction is transitioned into the `IDLE` state from `ACTIVE` state with `XA END` statement.
   *
   * For an `IDLE` XA transaction, you can issue either an `XA PREPARE` statement or an `XA COMMIT ... ONE PHASE`
   * statement.
   *
   * `XA COMMIT ... ONE PHASE` prepares and commits the transaction in one phase.
   */
  const IDLE = 2;

  /**
   * XA transaction is transitioned into the `PREPARED` state from `IDLE` state with `XA PREPARE` statement.
   *
   * For a `PREPARED` XA transaction, you can issue an `XA COMMIT` statement to commit and terminate the transaction,
   * or `XA ROLLBACK` to roll back and terminate the transaction.
   */
  const PREPARED = 3;
}

?>