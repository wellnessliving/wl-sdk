<?php

namespace WellnessLiving\Wl\Fitbuilder\Subscription;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Business\Account\Subscription\Fitbuilder\FitbuilderSubscriptionSid;

/**
 * Entry point to get information about business Fitbuilder subscription.
 *
 * @method WlModelRequest get() Gets information does Fitbuilder subscription plan is free or not.  Validates the business key, then checks whether Fitbuilder is currently enabled as a free subscription plan for the business.
 * @method WlModelRequest post() Upgrades the business Fitbuilder subscription plan.  Validates the business key and checks that the current user has backend access and the privilege to manage the Fitbuilder subscription, then upgrades the subscription plan within a database transaction.
 */
class FitbuilderSubscriptionModel extends WlModelAbstract
{
  /**
   * New subscription plan. One of {@link FitbuilderSubscriptionSid} constants.
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
   * @see FitbuilderSubscriptionSid
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