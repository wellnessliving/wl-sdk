<?php

namespace WellnessLiving\Wl\Promotion\Table;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API to activates/deactivates promotion record list.
 *
 * @method WlModelRequest post() Activates/deactivates record list.
 */
class ActivatorModel extends WlModelAbstract
{
  /**
   * Record key list.
   *
   * @post post
   * @var string[]
   */
  public $a_record;

  /**
   * <tt>true</tt> if records should be activated, <tt>false</tt> otherwise (deactivated).
   *
   * @post post
   * @var bool
   */
  public $is_activate;

  /**
   * Business key.
   *
   * @post post
   * @var string
   */
  public $k_business;
}

?>