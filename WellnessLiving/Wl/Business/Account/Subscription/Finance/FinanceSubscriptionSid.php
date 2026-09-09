<?php

namespace WellnessLiving\Wl\Business\Account\Subscription\Finance;

/**/
abstract class FinanceSubscriptionSid
{
  /**
   * @default
   * @inactive
   * @title None
   */
  const FREE = 1;

  /**
   * @price-month 19.00
   * @title Professional
   */
  const PROFESSIONAL = 2;
}

?>