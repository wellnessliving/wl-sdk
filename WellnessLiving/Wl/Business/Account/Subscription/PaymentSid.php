<?php

namespace WellnessLiving\Wl\Business\Account\Subscription;

/**
 * List of payment types.
 * At one time there can be several different payments for one subscription type.
 */
abstract class PaymentSid
{
  /**
   * Additional annual payment.
   */
  const ANNUAL = 2;

  /**
   * Regular payment according subscription plan.
   */
  const REGULAR = 1;
}

?>