<?php

namespace WellnessLiving\Wl\Business\Account\Subscription\MarketingSuite;

/**/
class MarketingSuiteSubscriptionSid
{
  /**
   * @price-month 49.00
   * @rate 1
   * @title Pro
   */
  const BASIC = 2;

  /**
   * @legacy
   * @price-month 0.00
   * @rate 1
   * @title Standard (Business)
   */
  const BASIC_BUSINESS = 4;

  /**
   * @legacy
   * @price-month 0.00
   * @rate 1
   * @title Standard (Legacy)
   */
  const BASIC_OLD = 3;

  /**
   * @default
   * @inactive
   * @rate 0
   * @title Base
   */
  const FREE = 1;

  /**
   * @price-month 199.00
   * @rate 2
   * @title Ultimate
   */
  const PRO = 5;
}

?>