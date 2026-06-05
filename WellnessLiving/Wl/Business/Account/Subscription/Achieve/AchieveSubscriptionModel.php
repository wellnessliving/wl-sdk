<?php

namespace WellnessLiving\Wl\Business\Account\Subscription\Achieve;

use WellnessLiving\WlModelAbstract;

/**
 * Entry point to get information about business Achieve subscription.
 */
class AchieveSubscriptionModel extends WlModelAbstract
{
  /**
   * If Achieve app has free subscription plan is `true`, otherwise (white label, professional) - `false`.
   *
   * @get result
   * @var bool
   */
  public $is_free = false;

  /**
   * If Achieve app has white label subscription plan is `true`, otherwise (free, professional) - `false`.
   *
   * @get result
   * @var bool
   */
  public $is_white_label = false;

  /**
   * Business key to check Achieve app subscription plan.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';
}

?>