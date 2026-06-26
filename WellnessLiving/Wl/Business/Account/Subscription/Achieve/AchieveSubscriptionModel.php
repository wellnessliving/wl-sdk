<?php

namespace WellnessLiving\Wl\Business\Account\Subscription\Achieve;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Entry point to get information about business Achieve subscription.
 *
 * @method WlModelRequest get() Returns the Achieve subscription plan flags (free and white-label) for the given business.  Used to determine which features and branding options are available in the Achieve mobile app for a business. For franchisees, the franchisor's subscription is used. Call this before rendering any Achieve-specific UI that depends on the plan tier.
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