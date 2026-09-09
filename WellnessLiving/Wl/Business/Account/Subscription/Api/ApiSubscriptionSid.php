<?php

namespace WellnessLiving\Wl\Business\Account\Subscription\Api;

/**/
abstract class ApiSubscriptionSid
{
  /**
   * @default
   * @inactive
   * @title None
   */
  const FREE = 1;

  /**
   * @price-month 19.00
   * @title Premium
   */
  const PREMIUM = 2;
}

?>