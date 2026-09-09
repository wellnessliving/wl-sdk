<?php

namespace WellnessLiving\Thoth\WlPay\Transaction\StripeCom\PayoutReconciliation;

/**
 * A list of `stripe.com` card types for report filter.
 *
 * Last used id: 4.
 */
class StripeCardTypeFilterSid
{
  /**
   * American Express.
   *
   * @title American Express
   */
  const AMERICAN_EXPRESS = 1;

  /**
   * Master Card.
   *
   * @title MasterCard
   */
  const MASTERCARD = 2;

  /**
   * Special type for filtering.
   *
   * @title Other
   */
  const OTHER = 3;

  /**
   * Visa.
   *
   * @title Visa
   */
  const VISA = 4;
}

?>