<?php

namespace WellnessLiving\Thoth\WlPay\Transaction\StripeCom\PayoutReconciliation;

/**
 * A list of `stripe.com` payment method types for report filter.
 *
 * Last used id: 3.
 */
class StripePaymentMethodFilterSid
{
  /**
   * ACH Direct Debit.
   *
   * @title ACH
   */
  const ACH = 1;

  /**
   * Stripe Terminal is used to collect in-person card payments.
   *
   * @title Stripe Terminal
   */
  const STRIPE_TERMINAL = 3;

  /**
   * Card.
   *
   * @title Virtual Terminal
   */
  const VIRTUAL_TERMINAL = 2;
}

?>