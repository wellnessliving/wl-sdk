<?php

namespace WellnessLiving\Wl\Business\Account\Subscription\Zapier;

/**/
abstract class ZapierSubscriptionSid
{
  /**
   * @default
   * @inactive
   * @rate 0
   * @title None
   */
  const FREE = 1;

  /**
   * @price-month 10.00
   * @rate 1
   * @title Professional
   */
  const PROFESSIONAL = 2;
}

?>