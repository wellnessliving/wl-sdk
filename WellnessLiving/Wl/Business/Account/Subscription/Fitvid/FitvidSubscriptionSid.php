<?php

namespace WellnessLiving\Wl\Business\Account\Subscription\Fitvid;

/**/
abstract class FitvidSubscriptionSid
{
  /**
   * @price-alarm 49.00
   * @price-month 49.00
   * @rate 1
   * @title Basic
   */
  const BASIC = 2;

  /**
   * @price-alarm 49.00
   * @price-month 259.00
   * @rate 3
   * @title Enterprise
   */
  const ENTERPRISE = 3;

  /**
   * @default
   * @inactive
   * @rate 0
   * @title None
   */
  const FREE = 1;

  /**
   * @price-alarm 49.00
   * @price-month 89.00
   * @rate 2
   * @title Premium
   */
  const PREMIUM = 4;
}

?>