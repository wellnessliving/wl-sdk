<?php

namespace WellnessLiving\Core\AI\LogTriage;

/**
 * Sources from which log triage findings can be collected.
 */
class TriageSourceSid
{
  /**
   * Erroneous asynchronous tasks.
   */
  const ASYNC_TASK = 5;

  /**
   * Erroneous background tasks.
   */
  const BACKGROUND_TASK = 4;

  /**/
  const ERROR_LOG = 1;

  /**/
  const SLOW_LOG = 2;

  /**
   * Aggregated usage statistics.
   */
  const WATCH_USAGE_STAT = 3;
}

?>