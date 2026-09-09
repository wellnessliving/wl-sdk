<?php

namespace WellnessLiving\Wl;

/**
 * Payment statuses for automatic payments for accounts.
 */
abstract class RsBusinessAccountPayStatusSid
{
  /**
   * The payment is being performed now.
   */
  const ACTIVE = 4;

  /**
   * Payments for which due date has came, but user has no card configured, and the payment could not be performed
   * automatically.
   */
  const DUE = 5;

  /**
   * Payment should be performed, but the last automatic attempt ended with an error.
   *
   * This payment should be retried.
   */
  const ERROR = 1;

  /**
   * Payment that was confirmed manually.
   */
  const MANUAL_OK = 3;

  /**
   * Payment was performed successfully automatically.
   */
  const OK = 2;
}

?>