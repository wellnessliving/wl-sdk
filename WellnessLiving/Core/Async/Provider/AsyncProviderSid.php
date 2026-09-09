<?php

namespace WellnessLiving\Core\Async\Provider;

/**
 * Represents a list of providers for asynchronous execution of code.
 */
abstract class AsyncProviderSid
{
  /**
   * Provider that executes tasks with a background CLI process.
   */
  const CLI = 5;

  /**
   * Provider that executes tasks in foreground (not asynchronously).
   */
  const FOREGROUND = 3;

  /**
   * Provider based on Gearman.
   */
  const GEARMAN = 1;

  /**
   * Provider that silently ignores all tasks.
   */
  const NULL = 2;

  /**
   * Provider for testing purposes.
   */
  const TESTING = 4;
}

?>