<?php

namespace WellnessLiving\Wl\Business\Account;

/**
 * List of all subscription plan types.
 *
 * Last ID: 3.
 *
 * @deprecated Not used anymore.
 *
 *   To add new subscription type you need to register new inheritor of the class mentioned above.
 */
class PaySid
{
  /**
   * Payment for web application.
   */
  const APPLICATION = 1;

  /**
   * Payment for subscription.
   */
  const SUBSCRIPTION = 2;

  /**
   * Payment for websites.
   */
  const WEBSITE = 3;
}

?>