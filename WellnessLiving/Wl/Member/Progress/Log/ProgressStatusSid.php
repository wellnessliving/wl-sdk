<?php

namespace WellnessLiving\Wl\Member\Progress\Log;

/**
 * Possible client's progress log statuses.
 *
 * Last used ID: 2.
 */
class ProgressStatusSid
{
  /**
   * Client's progress log has expired.
   *
   * @title Invalid
   */
  const INVALID = 2;

  /**
   * Client's progress log is valid.
   *
   * @title Valid
   */
  const VALID = 1;
}

?>