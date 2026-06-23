<?php

namespace WellnessLiving\Wl\Business\Reward\Config;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves information about reward config of the business.
 *
 * @method WlModelRequest get() Returns the reward program configuration for the specified business.  Used in the backend settings editor to show the current enabled or disabled state of the reward program before the staff member makes a change. Always reads live data, bypassing the cache.
 * @method WlModelRequest post() Updates the reward program enabled or disabled state for the specified business.  Used in the backend settings editor when a staff member turns the reward program on or off. The change is recorded in the reward audit log.
 */
class RewardConfigModel extends WlModelAbstract
{
  /**
   * <tt>true</tt> Reward program is disabled, <tt>false</tt> - otherwise.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_disabled_reward_program;

  /**
   * Business key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business;
}

?>