<?php

namespace WellnessLiving\Wl\Business\Account\Subscription\Zoom;

/**/
abstract class ZoomSubscriptionSid
{
  /**
   * @inactive
   * @rate 1
   * @title Basic
   */
  const BASIC = 2;

  /**
   * @default
   * @inactive
   * @rate 0
   * @title None
   */
  const FREE = 1;

  /**
   * @price-alarm 19.00
   * @price-month 19.00
   * @rate 2
   * @title Professional
   */
  const PROFESSIONAL = 3;
}

?>