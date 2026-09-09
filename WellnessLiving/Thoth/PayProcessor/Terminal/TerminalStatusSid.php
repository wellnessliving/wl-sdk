<?php

namespace WellnessLiving\Thoth\PayProcessor\Terminal;

/**
 * List of possible status of readers.
 *
 * Last ID: 3.
 */
class TerminalStatusSid
{
  /**
   * Status active.
   */
  const ACTIVE = 1;

  /**
   * Status inactive.
   */
  const INACTIVE = 2;

  /**
   * Status setup, reader is active but not added to stripe yet.
   */
  const SETUP = 3;
}

?>