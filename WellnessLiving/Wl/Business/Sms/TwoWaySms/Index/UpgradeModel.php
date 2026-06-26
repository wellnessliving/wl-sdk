<?php

namespace WellnessLiving\Wl\Business\Sms\TwoWaySms\Index;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api for two-way sms subscriptions.
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
  public $id_plan = 0;

  /**
   * Business key.
   *
   * @put get
   * @var string
   */
  public $k_business = '';

  /**
   * Redirect URL.
   *
   * @put result
   * @var string
   */
  public $url_redirect = '';
}

?>