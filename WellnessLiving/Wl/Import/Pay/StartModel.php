<?php

namespace WellnessLiving\Wl\Import\Pay;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Starts an import.
 *
 * @method WlModelRequest post() Starts an import.
 */
class StartModel extends WlModelAbstract
{
  /**
   * ID of a merchant for which import should be started.
   *
   * @post get
   * @var string
   */
  public $k_business_merchant;
}

?>