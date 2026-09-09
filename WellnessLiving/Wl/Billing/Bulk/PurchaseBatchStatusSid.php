<?php

namespace WellnessLiving\Wl\Billing\Bulk;

/**
 * Statuses of a bulk billing batch as a whole.
 *
 * Stored in the `id_
 *
 * Last used ID: 4
 */
class PurchaseBatchStatusSid
{
  /**
   * The batch was cancelled before it finished billing and will not be billed further.
   *
   * @title Cancelled
   */
  const CANCEL = 4;

  /**
   * Every client of the batch has been processed (billed or failed).
   *
   * @title Completed
   */
  const COMPLETE = 3;

  /**
   * The batch is being billed - at least one client has been processed and some are still pending.
   *
   * @title Billing in progress
   */
  const IN_PROGRESS = 2;

  /**
   * The batch is scheduled to be billed on its billing date and has not started yet.
   *
   * @title Scheduled
   */
  const SCHEDULED = 1;
}

?>