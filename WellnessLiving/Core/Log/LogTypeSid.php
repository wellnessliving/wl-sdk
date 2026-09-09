<?php

namespace WellnessLiving\Core\Log;

/**
 * A list of types of log records.
 */
class LogTypeSid
{
  /**
   * An error.
   */
  const ERROR = 2;

  /**
   * Fatal error.
   */
  const FATAL = 1;

  /**
   * Information.
   */
  const INFO = 5;

  /**
   * Notice.
   */
  const NOTICE = 4;

  /**
   * Warning.
   */
  const WARNING = 3;
}

?>