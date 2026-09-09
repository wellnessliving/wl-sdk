<?php

namespace WellnessLiving\Wl\Business\Account\Subscription\Achieve;

/**/
abstract class AchieveSubscriptionSid
{
  /**
   * @default
   * @inactive
   * @rate 0
   * @title Basic
   */
  const FREE = 1;

  /**
   * @price-alarm 60.00
   * @price-month 89.00
   * @rate 1
   * @title Premium
   */
  const PREMIUM = 2;

  /**
   * @legacy
   * @price-alarm 100.00
   * @price-month 169.00
   * @rate 2
   * @title White Label (Legacy)
   */
  const WHITE = 3;

  /**
   * @price-alarm 100.00
   * @price-month 209.00
   * @rate 4
   * @title White Label
   */
  const WHITE0125 = 7;

  /**
   * @price-alarm 100.00
   * @price-month 179.55
   * @rate 5
   * @title White Label (Business Max)
   */
  const WHITE_MAX = 4;

  /**
   * @legacy
   * @price-alarm 100.00
   * @price-month 189.00
   * @rate 4
   * @title White Label (Legacy)
   */
  const WHITE_PLUS = 6;

  /**
   * @price-alarm 100.00
   * @price-month 150.00
   * @rate 3
   * @title White Label (Business Pro)
   */
  const WHITE_PRO = 5;
}

?>