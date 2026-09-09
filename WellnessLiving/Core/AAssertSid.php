<?php

namespace WellnessLiving\Core;

/**
 * A list of assertion actions.
 */
abstract class AAssertSid
{
  /**/
  const EXCEPTION = 1;

  /**
   * Script execution is terminated immediately.
   */
  const FATAL = 2;

  /**
   * A warning message is written to error log.
   */
  const WARNING = 3;
}

?>