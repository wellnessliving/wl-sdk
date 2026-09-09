<?php

namespace WellnessLiving\Core;

/**
 * Test statuses.
 */
abstract class ATestStatusSid
{
  /**
   * The test is being processed now.
   */
  const ACTIVE = 7;

  /**
   * The test was deleted.
   */
  const DELETE = 8;

  /**
   * Tested code uses deprecated features.
   */
  const DEPRECATED = 11;

  /**
   * Test has problems with documentation.
   */
  const DOC = 10;

  /**
   * An error occurred, or an exception that was not caught.
   */
  const ERROR = 3;

  /**
   * Fatal error occurred (a call to an unexisting function, for example).
   */
  const FATAL = 5;

  /**
   * A new test that was never run.
   */
  const NEVER = 1;

  /**
   * Test is not written.
   */
  const NOTE = 6;

  /**
   * Test is completed with no errors.
   */
  const OK = 2;

  /**
   * Test has some skipped parts.
   */
  const SKIP = 9;

  /**/
  const WARNING = 4;
}

?>