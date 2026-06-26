<?php

namespace WellnessLiving\Wl\GymPass;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api endpoint used to connect Gympass integration.
 *
 * @method WlModelRequest post()
 */
class BusinessConnectModel extends WlModelAbstract
{
  /**
   * Business key.
   *
   * `null` in a case value is not initialized yet.
   *
   * @post post
   * @var string|null
   */
  public $k_business = null;

  /**
   * Location key.
   *
   * `null` in a case value is not initialized yet.
   *
   * @post post
   * @var string|null
   */
  public $k_location = null;

  /**
   * Gym ID.
   *
   * `null` in a case value is not initialized yet.
   *
   * @post post
   * @var string|null
   */
  public $s_gym_id = null;

  /**
   * Product ID.
   *
   * `null` in a case value is not initialized yet.
   *
   * @post post
   * @var string|null
   */
  public $s_product_id = null;
}

?>