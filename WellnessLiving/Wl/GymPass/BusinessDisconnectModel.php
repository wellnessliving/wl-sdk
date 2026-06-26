<?php

namespace WellnessLiving\Wl\GymPass;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api endpoint used to disconnect Gympass integration.
 *
 * @method WlModelRequest post()
 */
class BusinessDisconnectModel extends WlModelAbstract
{
  /**
   * Business key for which integration should be disabled.
   *
   * `null` in a case value is not specified.
   *
   * @post post
   * @var string|null
   */
  public $k_business = null;

  /**
   * Location key  for which integration should be disabled.
   *
   * `null` in a case value is not specified.
   *
   * @post post
   * @var string|null
   */
  public $k_location = null;
}

?>