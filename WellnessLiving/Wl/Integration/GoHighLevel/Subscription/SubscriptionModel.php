<?php

namespace WellnessLiving\Wl\Integration\GoHighLevel\Subscription;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API to manage Go High Level subscription.
 *
 * @method WlModelRequest put()
 */
class SubscriptionModel extends WlModelAbstract
{
  /**
   * Subscription plan that should be activated.
   *
   * @put get
   * @var int
   */
  public $id_plan = 0;

  /**
   * Business key.
   *
   * @put get
   * @var string
   */
  public $k_business = '';
}

?>