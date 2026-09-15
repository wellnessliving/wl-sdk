<?php

namespace WellnessLiving\Wl\Business\Account\Subscription\Collections;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Entry point to get information about business "Collections" subscription.
 *
 * @method WlModelRequest get() Gets information does "Collections" subscription plan is active or not.  Loads the "Collections" subscription for the given business and reports whether it is  currently active, so callers can decide whether the related feature can be used.
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