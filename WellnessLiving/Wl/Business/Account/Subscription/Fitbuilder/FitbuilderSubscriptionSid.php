<?php

namespace WellnessLiving\Wl\Business\Account\Subscription\Fitbuilder;

/**/
abstract class FitbuilderSubscriptionSid
{
  /**
   * @default
   * @inactive
   * @rate 0
   * @title None
   */
  const FREE = 1;

  /**
   * @price-month 49.00
   * @rate 1
   * @title Professional
   */
  const PROFESSIONAL = 2;
}

?>