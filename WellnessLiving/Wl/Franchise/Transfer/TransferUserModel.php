<?php

namespace WellnessLiving\Wl\Franchise\Transfer;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Gets information about user for transfer.
 *
 * @method WlModelRequest get()
 */
class TransferUserModel extends WlModelAbstract
{
  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business;

  /**
   * Full user's name.
   *
   * @get result
   * @var string
   */
  public $text_name_full;

  /**
   * Transfer uid key.
   *
   * @get get
   * @var string
   */
  public $uid_transfer;

  /**
   * User photo URL.
   *
   * @get result
   * @var string
   */
  public $url_photo;
}

?>