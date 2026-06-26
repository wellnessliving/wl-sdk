<?php

namespace WellnessLiving\Wl\Integration\Zapier;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api for Zapier subscription.
 *
 * @method WlModelRequest post()
 */
class UpgradeModel extends WlModelAbstract
{
  /**
   * Business key.
   *
   * @post get
   * @var string
   */
  public $k_business = '';
}

?>