<?php

namespace WellnessLiving\Wl\Business\Account\Subscription\Collections;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Entry point to get information about business "Collections" subscription.
 *
 * @method WlModelRequest get() Gets information does "Collections" subscription plan is active or not.
 */
class CollectionsSubscriptionModel extends WlModelAbstract
{
  /**
   * If the business has active subscription.
   *
   * @get result
   * @var bool
   */
  public $is_active = false;

  /**
   * Business key to check subscription plan.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';
}

?>