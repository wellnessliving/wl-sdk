<?php

namespace WellnessLiving\Wl\Virtual\Subscription;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api for manage virtual subscriptions.
 *
 * @method WlModelRequest put()
 */
class UpgradeModel extends WlModelAbstract
{
  /**
   * Number of licenses that should be added to current subscription.
   * If current subscription is inactive it will be activated with given number of licenses.
   *
   * @put post
   * @var int
   */
  public $i_license = 0;

  /**
   * New subscription plan.
   *
   * `null` if not defined yet.
   *
   * @put post
   * @var int|null
   */
  public $id_plan = null;

  /**
   * Business key.
   *
   * `null` if not specified yet.
   *
   * @put get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Url link to redirect after successful upgrade.
   *
   * `null` in a case if no redirect should appear.
   *
   * @put result
   * @var string|null
   */
  public $url_redirect = null;
}

?>