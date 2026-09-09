<?php

namespace WellnessLiving\Wl\Business\Account\Subscription;

/**
 * Used only for compatibility with Thoth.
 *
 * @deprecated Use {@link \WellnessLiving\Wl\Business\Account\Subscription\Website\WebsiteSubscriptionSid} instead.
 */
abstract class WebsiteSubscriptionSid
{
  /**
   * @price-alarm 99.00
   * @price-month 99.00
   * @rate 1
   * @title Basic
   */
  const BASIC = 2;

  /**
   * @price-alarm 99.00
   * @price-month 129.00
   * @rate 2
   * @title Basic
   */
  const BASIC_LARGE = 6;

  /**
   * @price-alarm 99.00
   * @price-month 299.00
   * @rate 6
   * @title Enterprise
   */
  const ENTERPRISE = 4;

  /**
   * @default
   * @inactive
   * @rate 0
   * @title None
   */
  const FREE = 1;

  /**
   * @price-alarm 99.00
   * @price-month 149.00
   * @rate 3
   * @title Premium
   */
  const PREMIUM = 3;

  /**
   * @price-alarm 99.00
   * @price-month 189.05
   * @rate 4
   * @title Premium (Business Max)
   */
  const PREMIUM_MAX = 7;

  /**
   * @price-alarm 99.00
   * @price-month 199.00
   * @rate 5
   * @title Professional
   */
  const PROFESSIONAL = 5;
}

?>