<?php

namespace WellnessLiving\Wl;

use WellnessLiving\Wl\Business\Account\Subscription\Base\BaseSubscriptionSid;

/**
 * Possible accounts for businesses in the system.
 *
 * Each account has price and give an access to set of features.
 *
 * Last ID: 4.
 *
 * @deprecated Use {@link BaseSubscriptionSid} instead.
 */
abstract class RsBusinessAccountSid
{
  /**
   * Basic plan.
   *
   * @title Basic
   */
  const BASIC = 6;

  /**
   * Account with all features and tools and dedicated support.
   */
  const ENTERPRISE = 2;

  /**
   * Free account with several basic features.
   */
  const FREE = 1;

  /**
   * Account with mostly all features and tools. But unlike {@link RsBusinessAccountSid::PROFESSIONAL} this plan is free.
   *
   * @title Partner
   */
  const PARTNER = 5;

  /**
   * Account with mostly all features and tools.
   */
  const PROFESSIONAL = 3;

  /**
   * First paid account with standard features.
   */
  const STANDARD = 4;
}

?>