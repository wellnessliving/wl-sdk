<?php

namespace WellnessLiving\Wl\Zoom;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Synchronizes zoom stored data with zoom account data.
 *
 * @method WlModelRequest post()
 */
class ZoomAccountSyncModel extends WlModelAbstract
{
  /**
   * Business key which currently use zoom user.
   *
   * @post get
   * @var string
   */
  public $k_business_owner;
}

?>