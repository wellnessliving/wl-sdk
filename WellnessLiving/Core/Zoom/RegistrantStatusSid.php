<?php

namespace WellnessLiving\Core\Zoom;

/**
 * List of registrant statuses.
 *
 * Last used ID: 3.
 */
class RegistrantStatusSid
{
  /**
   * Registrant is approved.
   */
  const APPROVED = 1;

  /**
   * Registrant is denied.
   */
  const DENIED = 3;

  /**
   * Registrant is in pending state. Not approved and not denied.
   */
  const PENDING = 2;
}

?>