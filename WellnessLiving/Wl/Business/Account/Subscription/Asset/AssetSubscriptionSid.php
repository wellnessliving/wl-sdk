<?php

namespace WellnessLiving\Wl\Business\Account\Subscription\Asset;

/**/
abstract class AssetSubscriptionSid
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