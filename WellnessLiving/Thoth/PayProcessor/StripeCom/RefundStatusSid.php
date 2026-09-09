<?php

namespace WellnessLiving\Thoth\PayProcessor\StripeCom;

/**
 * Statuses of refunds.
 *
 * @link https://stripe.com/docs/api/refunds/object#refund_object-status
 * @link https://stripe.com/docs/refunds
 */
class RefundStatusSid
{
  /**
   * Provided payment intent is canceled.
   */
  const CANCELED = 1;

  /**
   * A refund can fail if the customer’s bank or card issuer has been unable to process
   * it correctly (e.g., a closed bank account or a problem with the card).
   */
  const FAILED = 2;

  /**
   * Refunds use your available Stripe balance - this doesn't include any pending balance.
   * If your available balance doesn't cover the amount of the refund,
   * Stripe debits the remaining amount from your bank account.
   * If Stripe can’t debit the remaining amount from your bank account,
   * your refunds may go into a pending status until you add funds to your Stripe balance.
   */
  const PENDING = 3;

  /**
   * Refund is completed successfully.
   */
  const SUCCEEDED = 4;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.StripeCom.RefundStatusSid';
}

?>