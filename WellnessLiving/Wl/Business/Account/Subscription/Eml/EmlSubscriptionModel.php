<?php

namespace WellnessLiving\Wl\Business\Account\Subscription\Eml;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**/
class EmlSubscriptionModel extends WlModelAbstract
{
  /**
   * @delete get
   * @put get
   * @var int
   */
  public $cid_subscription = 0;

  /**
   * New subscription plan.
   *
   * @put post
   * @var int
   */
  public $id_plan = 0;

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