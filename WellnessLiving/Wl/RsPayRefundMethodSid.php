<?php

namespace WellnessLiving\Wl;

use WellnessLiving\Wl\Pay\Transaction\WlPayTransactionStatusSid;

/**
 * A list of refund destinations.
 */
abstract class RsPayRefundMethodSid
{
  /**
   * Money should be returned to user's account.
   */
  const ACCOUNT = 2;

  /**
   * Money should be returned as cash.
   */
  const CASH = 3;

  /**
   * Payment source should be used as refund destination.
   *
   * <b>Be attentive!</b>
   */
  const SELF = 1;

  /**
   * Same as {@link RsPayRefundMethodSid::SELF}, but for payment methods that does not support automatic refund.
   *
   * During transaction voiding money should be returned with the same payment method that has been used to pay for.
   *
   * Method {@link RsPayRefundMethodSid::SELF} is available only for automatic methods with api and real money
   * movement. For all other methods like cash, pin pads, checks, this method should be used.
   *
   * @see WlPayTransactionStatusSid::VOID
   */
  const VOID = 4;
}

?>