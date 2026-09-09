<?php

namespace WellnessLiving\Wl;

/**
 * Transactions types that payment gateways can perform.
 *
 * Last used ID: 13
 */
abstract class RsPayTransactionProcessSid
{
  /**
   * Money {@link http://en.wikipedia.org/wiki/Authorization_hold authorization}.
   */
  const AUTHORIZE = 6;

  /**
   * Payer authentication - checking of authentication enrollment.
   */
  const AUTH_ENROLLMENT = 11;

  /**
   * Payer authentication - setup of authentication process.
   */
  const AUTH_SETUP = 10;

  /**
   * Payer authentication - validate of authentication results.
   */
  const AUTH_VALIDATE = 12;

  /**
   * This transaction process is used whenever we need add any transaction information, but this should not affect transaction state/status.
   *  For example for Nuvei Card Swiper: payment is done successfully, but we receive Nuvei transaction id later via webhook. We should attach
   *  this information to transaction, but its status should not change.
   */
  const INFO = 13;

  /**
   * Purchase using full Credit Card data.
   */
  const PURCHASE = 2;

  /**
   * Purchase using magnet stripe data.
   */
  const PURCHASE_POS = 5;

  /**
   * Purchase repeating using reference to previous transaction or card.
   */
  const PURCHASE_REPEAT = 4;

  /**
   * Money refund.
   */
  const REFUND = 3;

  /**
   * Transaction became settled.
   */
  const SETTLE = 7;

  /**
   * Credit card or bank account data is stored to merchant vault.
   */
  const STORE = 8;

  /**
   * Card data (including address) verification.
   */
  const VERIFY = 1;

  /**
   * VOID operation was applied.
   */
  const VOID = 9;
}

?>