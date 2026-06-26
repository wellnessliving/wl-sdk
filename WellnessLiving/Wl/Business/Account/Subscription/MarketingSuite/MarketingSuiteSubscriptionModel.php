<?php

namespace WellnessLiving\Wl\Business\Account\Subscription\MarketingSuite;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Entry point to get information about "Marketing Suite" subscription.
 *
 * @method WlModelRequest delete()
 * @method WlModelRequest get()
 * @method WlModelRequest post()
 */
class MarketingSuiteSubscriptionModel extends WlModelAbstract
{
  /**
   * Returns available trial days for the business.
   *
   * `0` if trial is not available.
   *
   * @get result
   * @var int
   */
  public $i_trial_available = 0;

  /**
   * Returns available trial days for the business.
   *
   * `0` if trial is not available.
   *
   * @get result
   * @var int
   */
  public $i_trial_left = 0;

  /**
   * New subscription plan.
   *
   * @post post
   * @var int
   */
  public $id_plan = 0;

  /**
   * Unsubscribe reason ID.
   *
   * `null` in a case of custom reason. In this case {@link UnsubscribeReasonTrait::$text_unsubscribe_reason}
   * should be specified.
   *
   * @delete get
   * @var int|null
   */
  public $id_unsubscribe_reason = null;

  /**
   * Type of the upgrade.
   *
   * @post result
   * @var int
   */
  public $id_upgrade = 0;

  /**
   * If the business has active subscription.
   *
   * @get result
   * @var bool
   */
  public $is_active = false;

  /**
   * If the subscription is free. Calculated as price monthly equals to zero.
   *
   * @get result
   * @var bool
   */
  public $is_free = true;

  /**
   * If the business has trial period at this moment.
   *
   * @get result
   * @var bool
   */
  public $is_trial = false;

  /**
   * Business key.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * @delete get
   * @var string|null
   */
  public $text_unsubscribe_reason = null;
}

?>