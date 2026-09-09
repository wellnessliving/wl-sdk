<?php

namespace WellnessLiving\Wl\Business\Account;

use WellnessLiving\Wl\Business\Account\Subscription\Achieve\AchieveSubscriptionSid;

/**
 * Possible accounts for customisation Single Page Application in the system.
 *
 * Each account has price and give an access to set of features.
 *
 * Last ID: 4.
 *
 * @deprecated See {@link AchieveSubscriptionSid}
 */
class ApplicationSid
{
  /**
   * Application without customisations.
   */
  const NONE = 1;

  /**
   * Professional edition.
   */
  const PRO = 2;

  /**
   * White label edition.
   */
  const WHITE = 4;
}

?>