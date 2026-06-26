<?php

namespace WellnessLiving\Wl\Franchise\Transfer;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api to add transfer.
 *
 * @method WlModelRequest post() Creates transfer.
 */
class TransferAddModel extends WlModelAbstract
{
  /**
   * End date of temporary transfer.
   * Set if {@link TransferAddModel::$id_transfer_period} equals to
   *
   * @post post
   * @var string|null
   */
  public $dt_end_local = null;

  /**
   * Start date of temporary transfer.
   * Set if {@link TransferAddModel::$id_transfer_period} equals to
   *
   * @post post
   * @var string|null
   */
  public $dt_start_local = null;

  /**
   * Number of days of temporary transfer.
   * Set if {@link TransferAddModel::$id_transfer_period} equals to
   *
   * @post post
   * @var int|null
   */
  public $i_day = null;

  /**
   * Transfer direction ID.
   *
   * @post post
   * @var int
   */
  public $id_transfer_direction;

  /**
   * Transfer period ID.
   *
   * @post post
   * @var int
   */
  public $id_transfer_period;

  /**
   * Business key.
   * This is business in which the transfer takes place.
   *
   * @post post
   * @var string
   */
  public $k_business;

  /**
   * Location key.
   * This is a location where the transfer takes place.
   *
   * @post post
   * @var string
   */
  public $k_location_to;

  /**
   * Transferred user key.
   *
   * @post post
   * @var string
   */
  public $uid_transfer;
}

?>