<?php

namespace WellnessLiving\Wl\Business\Account\Subscription\Email;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**/
class EmailSubscriptionModel extends WlModelAbstract
{
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