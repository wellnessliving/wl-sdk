<?php

namespace WellnessLiving\Wl\Business\Reward\Config;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about reward config of the business.
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