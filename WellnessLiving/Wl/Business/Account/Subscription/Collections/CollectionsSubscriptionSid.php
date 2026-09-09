<?php

namespace WellnessLiving\Wl\Business\Account\Subscription\Collections;

/**/
abstract class CollectionsSubscriptionSid
{
  /**
   * @default
   * @inactive
   * @title None
   */
  const FREE = 1;

  /**
   * @inactive
   * @rate 0
   * @title Integration Requested
   */
  const INTEGRATION_REQUESTED = 3;

  /**
   * @price-month 10.00
   * @title Professional
   */
  const PROFESSIONAL = 2;
}

?>