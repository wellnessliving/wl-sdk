<?php

namespace WellnessLiving\Core\Zoom;

/**
 * List of transitions for registrant.
 *
 * Last used ID: 3.
 */
class RegistrantActionSid
{
  /**
   * Transition to approve registrant.
   */
  const APPROVE = 1;

  /**
   * Transition to cancel registrant.
   */
  const CANCEL = 2;

  /**
   * Transition to deny registrant.
   */
  const DENY = 3;
}

?>