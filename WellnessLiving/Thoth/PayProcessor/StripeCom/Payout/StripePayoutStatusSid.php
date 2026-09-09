<?php

namespace WellnessLiving\Thoth\PayProcessor\StripeCom\Payout;

/**
 * Stripe Payout statuses.
 *
 * @link https://stripe.com/docs/api/payouts/object#payout_object-status
 *
 * Last used id: 5.
 */
class StripePayoutStatusSid
{
  /**
   * Canceled.
   *
   * @title Cancelled
   */
  const CANCELED = 1;

  /**
   * Failed.
   *
   * @title Failed
   */
  const FAILED = 2;

  /**
   * In transit.
   *
   * @title In Transit
   */
  const IN_TRANSIT = 3;

  /**
   * Paid.
   *
   * @title Paid
   */
  const PAID = 4;

  /**
   * Pending.
   *
   * @title Pending
   */
  const PENDING = 5;
}

?>