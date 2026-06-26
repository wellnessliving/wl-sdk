<?php

namespace WellnessLiving\Wl\Franchise\Transfer;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * A model to change status of transfer.
 *
 * @method WlModelRequest put() Changes transfer status.
 */
class TransferStatusModel extends WlModelAbstract
{
  /**
   * Transfer status ID.
   *
   * @put post
   * @rule type-id {@link \Wl\Franchise\Transfer\TransferStatusSid}
   * @var int
   */
  public $id_transfer_status;

  /**
   * Business key.
   *
   * @put post
   * @rule value-db {@link \RsBusinessAr}
   * @var string
   */
  public $k_business;

  /**
   * Franchise transfer key.
   *
   * @put post
   * @rule value-db {@link \WlFranchiseTransferAr}
   * @var string
   */
  public $k_franchise_transfer;

  /**
   * Reason of transfer status.
   *
   * @put post
   * @var string
   */
  public $text_reason;
}

?>