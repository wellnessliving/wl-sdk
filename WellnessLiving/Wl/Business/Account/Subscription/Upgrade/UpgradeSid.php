<?php

namespace WellnessLiving\Wl\Business\Account\Subscription\Upgrade;

/**
 * List of upgrade actions.
 */
class UpgradeSid
{
  /**
   * Extend discount period for already active subscription if it is supported by the subscription.
   */
  const DISCOUNT_EXTEND = 5;

  /**
   * Downgrade already active subscription to a lower plan.
   */
  const DOWNGRADE = 3;

  /**
   * Activate a subscription.
   */
  const SUBSCRIBE = 1;

  /**
   * Upgrade already active subscription to a higher plan.
   */
  const UPGRADE = 2;
}

?>