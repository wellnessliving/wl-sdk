<?php

namespace WellnessLiving\Wl\Business\Account\Subscription;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Endpoint used by business to request specific subscription plan.
 *
 * @method WlModelRequest post()
 */
class SubscriptionRequestModel extends WlModelAbstract
{
  /**
   * CID of the subscription for which the request is made.
   *
   * @post post
   * @var int
   */
  public $cid_subscription = 0;

  /**
   * ID of the subscription plan requested by business.
   *
   * @post post
   * @var int
   */
  public $id_plan = 0;

  /**
   * The business key within which request is made.
   *
   * @post post
   * @var string
   */
  public $k_business = '0';
}

?>