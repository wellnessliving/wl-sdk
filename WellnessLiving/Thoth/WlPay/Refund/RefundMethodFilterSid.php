<?php

namespace WellnessLiving\Thoth\WlPay\Refund;

/**
 * Define types of refund methods.
 *
 * @id-last 5
 */
class RefundMethodFilterSid
{
  /**
   * Money returned to the client account.
   *
   * @title Account
   */
  const ACCOUNT = 1;

  /**
   * Money returned to the bank account.
   *
   * @title ACH
   */
  const ACH = 2;

  /**
   * Money returned as cash.
   *
   * @title Cash
   */
  const CASH = 3;

  /**
   * Money returned by check.
   *
   * @title Check
   */
  const CHECK = 4;

  /**
   * Money returned to the credit card.
   *
   * @title Virtual Terminal
   */
  const VIRTUAL_TERMINAL = 5;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Refund.RefundMethodFilterSid';
}

?>