<?php

namespace WellnessLiving\Wl\Integration\Zoom;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API class to handle request to confirm paid account connection.
 *
 * @method WlModelRequest post() Sends email about paid account connection.
 */
class ConfirmationModel extends WlModelAbstract
{
  /**
   * Business key.
   *
   * @post get
   * @var string
   */
  public $k_business;
}

?>