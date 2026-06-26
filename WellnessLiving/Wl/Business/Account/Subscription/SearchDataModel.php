<?php

namespace WellnessLiving\Wl\Business\Account\Subscription;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to get subscription status.
 *
 * @method WlModelRequest get()
 */
class SearchDataModel extends WlModelAbstract
{
  /**
   * Subscription statuses.
   *
   * @get result
   * @var array
   */
  public $a_subscription_status;

  /**
   * @get get
   * @var string
   */
  public $k_business;
}

?>