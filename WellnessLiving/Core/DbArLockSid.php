<?php

namespace WellnessLiving\Core;

/**
 * A list of database table locking types.
 */
abstract class DbArLockSid
{
  /**
   * Allow consecutive reads.
   */
  const READ = 1;

  /**
   * Non-locking consistent read for a reason that is not known or not classified.
   *
   * @deprecated Use one of <tt>SNAPSHOT_*</tt> constants instead.
   */
  const SNAPSHOT = 3;

  /**
   * Non-locking consistent read may be applied because this data is configuration data that is changed rarely, and,
   * if changed during the transaction, it is entirely fine to say that the transaction has completed before the change
   * was made.
   *
   * Examples:
   *
   * * business configurations;
   * * price of a product;
   * * title of an email.
   */
  const SNAPSHOT_CONFIGURATION = 3;

  /**
   * Non-locking consistent read may be applied because this data is never changed.
   */
  const SNAPSHOT_CONSTANT = 3;

  /**
   * Non-locking consistent read may be applied because slight inaccuracy is entirely acceptable.
   *
   * Example usage is saving of user profile fields.
   * If there are multiple threads update profile of the same user concurrently, it is entirely fine if some data will
   * be stored from one thread and some other data will be stored from another thread.
   * User will just update it again.
   *
   * This inaccuracy is slight because it is a very rare situation that profile of the same user be updated concurrently
   * by multiple threads. And, because there is a simple way to fix the result (by submitting the request again).
   *
   * And, because consequences of the inaccuracy do not influence overall behavior heavily.
   * Having user email or password not updated is usually not a big deal: they will update it again.
   * However, if the consequences include something like money- or security-related,
   * this may not qualify for "slight inaccuracy is entirely acceptable".
   *
   * Also, this could become a problem if this situation occurs often.
   * In this case, this is also not a "slight inaccuracy".
   */
  const SNAPSHOT_INACCURACY = 3;

  /**
   * This value may not be used for classification of why snapshot is used in an SQL query.
   *
   * This value is designed to see how current SQL query is about to be blocked.
   */
  const SNAPSHOT_IS = 3;

  /**
   * The SQL query is performed in a different database connection created solely for this individual SQL query.
   *
   * Such queries may not have locking statement, neither they are executed in the current database connection, nor
   * they are executed in a database transaction. This leads to possibility of inconsistency of the data read by
   * this SQL query.
   */
  const SNAPSHOT_NOT_SNAPSHOT = 3;

  /**
   * The SQL query is performed not in a database transaction.
   */
  const SNAPSHOT_NOT_TRANSACTION = 3;

  /**
   * Result of this SQL query does not effectively affect the overall result.
   * It is primarily used for optimization purposes.
   *
   * Example usage is an SQL query which is used to make a decision to skip some updates for optimization purposes.
   *
   * This may be used for those update which only set the value to the latest valid state,
   * not to updates that apply some delta to the stored value.
   * I.e. if the updates will always be performed, this will not influence the overall result except additional load.
   *
   * Be careful with this class.
   * For this class of snapshot reading, it is important that if the update is skipped by this thread due to race
   * condition, it will be performed by a concurrent thread. If there are chances that the concurrent thread will not
   * perform the update, there may come chances that the update may become lost.
   *
   * Example case when this class is not applicable is making non-locking select of values of multiple rows to compare
   * them with the latest values to decide which rows should be updated.
   * This effectively allows not to lock the rows which are not changed.
   * But, if multiple threads update the rows with different values, there comes a chance that some rows will be set to
   * value from the first thread and other rows will be set to value from the second thread. If this inaccuracy is
   * acceptable, {@link DbArLockSid::SNAPSHOT_INACCURACY} should be used.
   */
  const SNAPSHOT_OPTIMIZATION = 3;

  /**
   * Entire transaction does not have any other SQL queries except `SELECT` queries.
   *
   * Example usage is a method where you want to make consistent dumps of multiple tables, and this is the only
   * responsibility of the transaction.
   */
  const SNAPSHOT_READ_TRANSACTION = 3;

  /**
   * The value read by this query does not influence behavior of the database transaction.
   *
   * It is only used as a return value, or in a commit handler.
   */
  const SNAPSHOT_RETURN = 3;

  /**
   * This `SELECT` statement is performed in a database transaction about which we in advance know that it will be
   * rolled back.
   */
  const SNAPSHOT_ROLLBACK = 3;

  /**
   * This SQL statement can only run in tests.
   */
  const SNAPSHOT_TEST = 3;

  /**
   * Acquires exclusive lock for writing.
   */
  const WRITE = 2;
}

?>