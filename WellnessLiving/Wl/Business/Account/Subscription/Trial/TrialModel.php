<?php

namespace WellnessLiving\Wl\Business\Account\Subscription\Trial;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Trial period manager.
 *
 * @method WlModelRequest delete() Removes trial period for specific business and subscription.
 * @method WlModelRequest put()
 */
class TrialModel extends WlModelAbstract
{
  /**
   * Type of the subscription.
   *
   * @delete get
   * @put get
   * @var int
   */
  public $cid_subscription = 0;

  /**
   * New trial end date after extension.
   *
   * @put result
   * @var string
   */
  public $dl_trial_end = '';

  /**
   * Number of days granted during trial extension.
   *
   * @put result
   * @var int
   */
  public $i_trial_days = 0;

  /**
   * Business key.
   *
   * @delete get
   * @put get
   * @var string
   */
  public $k_business = '';
}

?>