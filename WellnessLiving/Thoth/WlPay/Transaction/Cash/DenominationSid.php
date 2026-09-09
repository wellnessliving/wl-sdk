<?php

namespace WellnessLiving\Thoth\WlPay\Transaction\Cash;

/**
 * Contains list of denomination values of money.
 */
class DenominationSid
{
  /**
   * Coin valued at 20 cents.
   */
  const CENT_TWENTY = 14;

  /**
   * Coin valued at 10 cents.
   */
  const DIME = 3;

  /**
   * Banknote valued at 50 dollar.
   */
  const DOLLAR_FIFTY = 10;

  /**
   * Banknote valued at 5 dollar.
   */
  const DOLLAR_FIVE = 7;

  /**
   * Banknote valued at 100 dollar.
   */
  const DOLLAR_HUNDRED = 11;

  /**
   * Banknote valued at 1 dollar.
   */
  const DOLLAR_ONE = 6;

  /**
   * Coin valued at 1 dollar.
   */
  const DOLLAR_ONE_COIN = 13;

  /**
   * Banknote valued at 10 dollar.
   */
  const DOLLAR_TEN = 8;

  /**
   * Banknote valued at 20 dollar.
   */
  const DOLLAR_TWENTY = 9;

  /**
   * Coin valued at 2 dollar.
   */
  const DOLLAR_TWO_COIN = 12;

  /**
   * Coin valued at 50 cents.
   */
  const HALF = 5;

  /**
   * Coin valued at 5 cents.
   */
  const NICKEL = 2;

  /**
   * Coin valued at 1 cent.
   */
  const PENNY = 1;

  /**
   * Coin valued at 25 cents.
   */
  const QUARTER = 4;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Transaction.Cash.DenominationSid';
}

?>