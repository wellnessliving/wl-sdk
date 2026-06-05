<?php

namespace WellnessLiving\Wl\Business\Account\Subscription;

use WellnessLiving\Core\Locale\LocaleSid;
use WellnessLiving\WlModelAbstract;

/**
 * Entry point to retrieve information about business subscription.
 */
class SubscriptionInfoModel extends WlModelAbstract
{
  /**
   * CID of the subscription information of which is requested.
   *
   * @get get
   * @var int
   */
  public $cid_subscription = 0;

  /**
   * Locale ID of the business which subscription information is requested for.
   *
   * @get result
   * @var int
   * @see LocaleSid
   */
  public $id_locale = 0;

  /**
   * Currently active plan ID for requested subscription.
   *
   * @get result
   * @var int
   */
  public $id_plan = 0;

  /**
   * Whether subscription is active.
   *
   * `true` if subscription is active, `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_active = false;

  /**
   * Business key for which subscription information is requested.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';
}

?>