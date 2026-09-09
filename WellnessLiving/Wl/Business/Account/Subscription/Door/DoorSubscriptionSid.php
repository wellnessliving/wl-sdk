<?php

namespace WellnessLiving\Wl\Business\Account\Subscription\Door;

/**/
abstract class DoorSubscriptionSid
{
  /**
   * @price-month 29.00
   * @rate 1
   * @title Brivo
   */
  const BASE = 2;

  /**
   * @default
   * @inactive
   * @rate 0
   * @title None
   */
  const FREE = 1;

  /**
   * @price-month 29.00
   * @rate 1
   * @title Passport
   */
  const PASSPORT = 3;
}

?>