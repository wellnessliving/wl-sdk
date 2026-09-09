<?php

namespace WellnessLiving\Wl\Business\Account\Subscription;

/**
 * Used only for compatibility with Thoth.
 *
 * @deprecated Use {@link \WellnessLiving\Wl\Business\Account\Subscription\Base\BaseSubscriptionSid} instead.
 */
class BaseSubscriptionSid
{
  /**
   * @price-month 99.00
   * @rate 2
   * @title Advanced
   */
  const ADVANCED = 4;

  /**
   * @price-month 59.00
   * @rate 1
   * @title Basic
   */
  const BASIC = 3;

  /**
   * @legacy
   * @price-alarm 120.00
   * @price-month 159.00
   * @rate 3
   * @title Business(Legacy)
   */
  const BUSINESS = 7;

  /**
   * @price-alarm 120.00
   * @price-month 199.00
   * @rate 3
   * @title Business
   */
  const BUSINESS_2405 = 11;

  /**
   * @legacy
   * @price-alarm 120.00
   * @price-month 210.00
   * @rate 3
   * @title Business(Legacy)
   */
  const BUSINESS_LIGHT = 8;

  /**
   * @price-alarm 120.00
   * @price-month 199.50
   * @rate 3
   * @title Business Max
   */
  const BUSINESS_MAX = 9;

  /**
   * @price-alarm 120.00
   * @price-month 199.00
   * @rate 3
   * @title Business Pro
   */
  const BUSINESS_PRO = 10;

  /**
   * @price-month 499.00
   * @rate 4
   * @title Enterprise
   */
  const ENTERPRISE = 6;

  /**
   * @default
   * @inactive
   * @rate 0
   * @title None
   */
  const FREE = 1;

  /**
   * @price-month 0.00
   * @rate 3
   * @title Business Partner
   */
  const PARTNER = 2;

  /**
   * @price-month 0.00
   * @rate 3
   * @title Platform Access
   */
  const PLATFORM_ACCESS = 15;

  /**
   * @price-alarm 120.00
   * @price-month 259.00
   * @rate 3
   * @title Professional
   */
  const PROFESSIONAL = 5;

  /**
   * @legacy
   * @price-month 99.00
   * @rate 3
   * @title Starter
   */
  const STARTER = 12;

  /**
   * @price-month 69.00
   * @rate 3
   * @title Starter
   */
  const STARTER_2502 = 13;

  /**
   * @price-month 0.00
   * @rate 3
   * @title Trial
   * @trial
   */
  const TRIAL = 14;
}

?>