<?php

namespace WellnessLiving;

/**
 * Types of webhook operations.
 */
class WlWebhookOperationSid
{
  /**
   * Add row operation.
   */
  const CREATED = 1;

  /**
   * Delete row operation.
   */
  const DELETED = 3;

  /**
   * Modification row operation.
   */
  const MODIFIED = 2;
}

?>