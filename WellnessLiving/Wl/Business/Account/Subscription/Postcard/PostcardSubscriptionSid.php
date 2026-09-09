<?php

namespace WellnessLiving\Wl\Business\Account\Subscription\Postcard;

/**/
abstract class PostcardSubscriptionSid
{
  /**
   * @price-month 0.00
   * @title Basic
   */
  const BASIC = 3;

  /**
   * @default
   * @inactive
   * @title None
   */
  const FREE = 1;

  /**
   * @price-month 9.00
   * @title Professional
   */
  const PROFESSIONAL = 2;
}

?>