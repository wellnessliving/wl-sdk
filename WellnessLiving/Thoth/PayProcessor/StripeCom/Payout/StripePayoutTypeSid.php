<?php

namespace WellnessLiving\Thoth\PayProcessor\StripeCom\Payout;

/**
 * Stripe Payout types.
 *
 * @link https://stripe.com/docs/api/payouts/object#payout_object-type
 *
 * Last used id: 2.
 */
class StripePayoutTypeSid
{
  /**
   * Bank Account.
   */
  const BANK_ACCOUNT = 1;

  /**
   * Card.
   */
  const CARD = 2;
}

?>