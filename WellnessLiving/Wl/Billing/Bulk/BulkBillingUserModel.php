<?php

namespace WellnessLiving\Wl\Billing\Bulk;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Removes a single client from a bulk billing before they are billed.
 *
 * Only a client that has not been billed yet can be removed; a client that was already charged or failed keeps their
 * result. The client is not deleted - they are marked cancelled and skipped when the billing runs.
 *
 * @method WlModelRequest delete() Removes the client from the batch so that they are not billed.  Only a client that has not been billed yet can be removed; a client that was already charged or failed keeps their result. The client is not deleted from the batch - they are marked cancelled and skipped when the billing runs, together with the moment of the change and the acting user.
 */
class BulkBillingUserModel extends WlModelAbstract
{
  /**
   * The business key.
   *
   * @delete get
   * @var string
   */
  public $k_business = '';

  /**
   * The purchase batch key.
   *
   * @delete get
   * @var string
   */
  public $k_purchase_batch = '';

  /**
   * The user key of the client to remove from the batch.
   *
   * @delete get
   * @var string
   */
  public $uid = '';
}

?>