<?php

namespace WellnessLiving\Wl\Business\Account;

use WellnessLiving\Wl\Business\Account\Subscription\Website\WebsiteSubscriptionSid;

/**
 * Possible website subscription plans.
 *
 * Each plan has price and may give an access to set of features.
 *
 * Last ID: 5.
 *
 * @deprecated Use {@link WebsiteSubscriptionSid} instead.
 */
class WebsiteSid
{
  /**
   * Basic edition.
   *
   * @title Basic
   */
  const BASIC = 4;

  /**
   * Enterprise edition.
   *
   * @title Enterprise
   */
  const ENTERPRISE = 3;

  /**
   * No payments considered.
   */
  const NONE = 1;

  /**
   * Premium edition.
   *
   * @title Premium
   */
  const PREMIUM = 5;

  /**
   * Professional edition.
   *
   * @title Professional
   */
  const PRO = 2;
}

?>