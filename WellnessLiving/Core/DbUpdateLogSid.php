<?php

namespace WellnessLiving\Core;

/**
 * A list of types of log entries in database update log.
 */
abstract class DbUpdateLogSid
{
  /**
   * Information about application of a database change.
   */
  const CHANGE = 2;

  /**
   * Debug information.
   */
  const DEBUG = 8;

  /**
   * Information about errors that occurred during the update.
   */
  const ERROR = 3;

  /**
   * Changes in files under <tt>writable/php/</tt>.
   */
  const FILE = 6;

  /**
   * Additional information about database update process.
   *
   * Examples: notification about number of changes.
   * This type is also set to entries with information that a database can not be locked.
   */
  const INFO = 5;

  /**
   * All other log entries.
   */
  const OTHER = 1;

  /**
   * Information about that a task can not be applied at the current round.
   */
  const SKIP = 7;

  /**
   * Information database update stages.
   */
  const STAGE = 4;

  /**
   * Information about errors that occurred during the update.
   */
  const WARNING = 9;
}

?>