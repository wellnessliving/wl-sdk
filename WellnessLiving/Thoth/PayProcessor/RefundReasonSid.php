<?php

namespace WellnessLiving\Thoth\PayProcessor;

/**
 * Last used ID: 7.
 */
class RefundReasonSid
{
  /**
   * Automatic void when payment is erroneous.
   *
   * The Reason could be:
   * * For `Paragon` we reschedule the task to reduce a chance to refund.
   */
  const ERROR = 1;

  /**
   * Payment was voided/refunded by staff.
   */
  const MANUAL = 6;

  /**
   * Payment was canceled.
   *
   * The Reason could be:
   * * `Paragon` ticket was canceled on terminal.
   */
  const PAYMENT_CANCELED_BY_PROCESSOR = 5;

  /**
   * Payment was canceled.
   *
   * The Reason could be:
   * * `Paragon` ticket was canceled.
   * * `Stripe` payment intent was canceled.
   * * Payment amount was changed.
   */
  const PAYMENT_CANCELED_IN_STORE = 2;

  /**
   * Error occurred during purchase after successful payment. We need to void payment.
   */
  const PURCHASE_FAIL = 7;

  /**
   * Automatic void when purchase was not completed.
   * Transaction was initiated. For example for payment with `PureCloud` terminal. Amount authorization could be possibly
   * performed. But staff just did not click `Complete` button. So we need to void.
   */
  const PURCHASE_NOT_COMPLETED = 3;

  /**
   * Unknown reason.
   */
  const UNDEFINED = 4;
}

?>