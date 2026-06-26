<?php

namespace WellnessLiving\Wl\Import\Pay;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Aborts a running import.
 *
 * @method WlModelRequest post() Aborts a running import.
 */
class AbortModel extends WlModelAbstract
{
  /**
   * ID of a merchant for which import should be aborted.
   *
   * @post get
   * @var string
   */
  public $k_business_merchant;
}

?>