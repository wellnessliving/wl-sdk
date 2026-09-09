<?php

namespace WellnessLiving\Thoth\PayHardware;

use WellnessLiving\Thoth\PayProcessor\Terminal\TerminalStatusSid;

/**
 * List of reader status for reader list page.
 *
 * Last used ID: 3.
 */
class ReaderStatusFilterSid
{
  /**
   * Active reader.
   *
   * @see TerminalStatusSid::ACTIVE
   */
  const ACTIVE = 2;

  /**
   * All reader.
   */
  const ALL = 1;

  /**
   * Inactive reader
   *
   * @see TerminalStatusSid::ACTIVE
   * @see TerminalStatusSid::SETUP
   */
  const INACTIVE = 3;
}

?>