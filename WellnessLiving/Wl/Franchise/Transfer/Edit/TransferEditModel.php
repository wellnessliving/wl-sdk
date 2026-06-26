<?php

namespace WellnessLiving\Wl\Franchise\Transfer\Edit;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api to edit franchise transfer.
 *
 * @method WlModelRequest get() Gets information about start and end dates of franchise transfer.
 * @method WlModelRequest put() Edits franchise transfer or or creates a new one if term of the transfer is increased (or transfer becomes permanent).
 */
class TransferEditModel extends WlModelAbstract
{
  /**
   * <tt>true</tt> if transfer can be edited to permanent, <tt>false</tt> otherwise.
   *
   * @get result
   * @var bool
   */
  public $can_permanent;

  /**
   * Current end date of temporary transfer.
   *
   * @get result
   * @var string|null
   */
  public $dt_end_current_local;

  /**
   * New end date of temporary transfer.
   *
   * @put post
   * @var string|null
   */
  public $dt_end_local = null;

  /**
   * Current start date of temporary transfer.
   *
   * @get result
   * @var string|null
   */
  public $dt_start_current_local;

  /**
   * New start date of temporary transfer.
   *
   * @put post
   * @var string|null
   */
  public $dt_start_local = null;

  /**
   * Franchise transfer direction.
   *
   * @get result
   * @var int
   */
  public $id_transfer_direction;

  /**
   * Transfer period ID.
   *
   * @put post
   * @rule type-id {@link \Wl\Franchise\Transfer\TransferPeriodSid}
   * @var int
   */
  public $id_transfer_period;

  /**
   * Business key.
   *
   * @get get
   * @put get
   * @var string
   */
  public $k_business;

  /**
   * Franchise transfer key.
   *
   * @get get
   * @put get
   * @var string
   */
  public $k_franchise_transfer;
}

?>