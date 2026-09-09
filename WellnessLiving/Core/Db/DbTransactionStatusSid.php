<?php

namespace WellnessLiving\Core\Db;

/**
 * A list of database transaction statuses.
 */
class DbTransactionStatusSid
{
  /**
   * Transaction method is being executed now.
   */
  const ACTIVE = 2;

  /**
   * Transaction is successfully committed.
   */
  const COMMITTED = 5;

  /**
   * Transaction is being committed now.
   */
  const COMMITTING = 3;

  /**
   * Transaction is being initialized now.
   */
  const INIT = 1;

  /**
   * Transaction is being rolled back now.
   */
  const ROLLBACK = 4;
}

?>