<?php

namespace WellnessLiving\Wl\Video\Subscription;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api for manage video subscriptions.
 *
 * @method WlModelRequest put()
 */
class UpgradeModel extends WlModelAbstract
{
  /**
   * New subscription plan.
   *
   * @put post
   * @var int
   */
  public $id_plan;

  /**
   * Business key.
   *
   * @put get
   * @var string
   */
  public $k_business;
}

?>