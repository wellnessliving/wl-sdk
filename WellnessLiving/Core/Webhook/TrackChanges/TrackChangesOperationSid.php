<?php

namespace WellnessLiving\Core\Webhook\TrackChanges;

/**
 * Types of operations in table change tracking.
 *
 * In the SDK, this class corresponds to the `\WellnessLiving\WlWebhookOperationSid` class.
 *
 * Last used: 3.
 */
class TrackChangesOperationSid
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