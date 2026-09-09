<?php

namespace WellnessLiving\Wl\Business\Account\Subscription\Reward;

/**/
abstract class RewardSubscriptionSid
{
  /**
   * @default
   * @inactive
   * @title None
   */
  const FREE = 1;

  /**
   * @price-month 29.00
   * @title Professional
   */
  const PROFESSIONAL = 2;
}

?>