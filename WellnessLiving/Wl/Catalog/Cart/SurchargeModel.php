<?php

namespace WellnessLiving\Wl\Catalog\Cart;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API to save surcharge amount to the cart.
 *
 * @method WlModelRequest post() Sets surcharge fee amount to pay and returns updated data.
 */
class SurchargeModel extends WlModelAbstract
{
  /**
   * Data for Quick Buy.
   *
   * @post post
   * @var array
   */
  public $a_quick_config = [];

  /**
   * Whether surcharge was set manually.
   * `false` if not, `true` if yes.
   *
   * @post post
   * @var bool
   */
  public $is_manual;

  /**
   * Business key.
   *
   * @post post
   * @var string
   */
  public $k_business;

  /**
   * Surcharge amount to update the cart.
   *
   * @post post
   * @var string
   */
  public $m_surcharge;
}

?>