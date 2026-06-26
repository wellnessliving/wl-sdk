<?php

namespace WellnessLiving\Wl\Fitbuilder\Subscription;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Entry point to get information about business Fitbuilder subscription.
 *
 * @method WlModelRequest get() Gets information does Fitbuilder subscription plan is free or not.
 * @method WlModelRequest post()
 */
class FitbuilderSubscriptionModel extends WlModelAbstract
{
  /**
   * New subscription plan.
   *
   * @post post
   * @var int
   */
  public $id_plan = 0;

  /**
   * If Fitbuilder has free subscription plan is `true`, otherwise - `false`.
   *
   * @get result
   * @var bool
   */
  public $is_free = true;

  /**
   * Business key to check Fitbuilder subscription plan.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '0';
}

?>