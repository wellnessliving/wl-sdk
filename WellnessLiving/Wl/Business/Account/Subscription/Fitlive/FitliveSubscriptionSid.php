<?php

namespace WellnessLiving\Wl\Business\Account\Subscription\Fitlive;

/**/
abstract class FitliveSubscriptionSid
{
  /**
   * @price-month 19
   * @rate 2
   * @title Advanced
   */
  const ADVANCED = 5;

  /**
   * @price-month 0
   * @rate 1
   * @title Basic
   */
  const BASIC = 4;

  /**
   * @default
   * @inactive
   * @rate 0
   * @title None
   */
  const FREE = 1;

  /**
   * @price-month 29
   * @rate 3
   * @title Professional
   */
  const LICENCED = 2;

  /**
   * @inactive
   * @rate 0
   * @title Suspended
   */
  const SUSPENDED = 3;
}

?>