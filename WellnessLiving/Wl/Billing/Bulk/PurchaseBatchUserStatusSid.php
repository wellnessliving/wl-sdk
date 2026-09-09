<?php

namespace WellnessLiving\Wl\Billing\Bulk;

/**
 * Per-client billing statuses within a bulk billing batch.
 *
 * Stored in the `id_
 *
 * Last used ID: 4
 */
class PurchaseBatchUserStatusSid
{
  /**
   * The client was removed from the batch before being billed and will not be billed.
   *
   * @title Cancelled
   */
  const CANCEL = 4;

  /**
   * The client has been billed successfully - a purchase was created.
   *
   * @title Charged
   */
  const CHARGED = 2;

  /**
   * Billing of the client failed and no purchase was created.
   *
   * @title Failed
   */
  const FAIL = 3;

  /**
   * The client has not been billed yet.
   *
   * @title Pending
   */
  const PENDING = 1;
}

?>