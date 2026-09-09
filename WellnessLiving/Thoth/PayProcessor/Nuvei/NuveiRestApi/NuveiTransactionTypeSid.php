<?php

namespace WellnessLiving\Thoth\PayProcessor\Nuvei\NuveiRestApi;

/**
 * `Nuvei` type of transaction.
 *
 * Last used ID: 11.
 */
class NuveiTransactionTypeSid
{
  /**
   * To perform an authorization-only request.
   *
   * @link https://docs.nuvei.com/documentation/features/financial-operations/auth-and-settle/#authorization-step
   */
  const AUTH = 1;

  /**
   * To perform an authorization-only request with 3DS challenge.
   *
   * @link https://docs.nuvei.com/api/main/indexMain_v1_0.html?json#getTransactionDetails
   */
  const AUTH3D = 4;

  /**
   * Credit transaction.
   */
  const CREDIT = 10;

  /**
   * `Simple Connect` initial transaction with card tokenization.
   */
  const INIT_AUTH3D = 11;

  /**
   * Payout transaction.
   *
   * @link https://docs.nuvei.com/api/main/indexMain_v1_0.html?json#getTransactionDetails
   */
  const PAYOUT = 6;

  /**
   * To perform an authorization-only request (with a longer settlement period).
   */
  const PRE_AUTH = 2;

  /**
   * Refund transaction.
   *
   * @link https://docs.nuvei.com/api/main/indexMain_v1_0.html?json#getTransactionDetails
   */
  const REFUND = 9;

  /**
   * To perform a regular payment request.
   *
   * @link https://docs.nuvei.com/documentation/features/financial-operations/auth-and-settle/#authorization-step
   */
  const SALE = 3;

  /**
   *  To perform a regular payment request with 3DS challenge.
   *
   * @link https://docs.nuvei.com/api/main/indexMain_v1_0.html?json#getTransactionDetails
   */
  const SALE3D = 5;

  /**
   * Settle transaction.
   *
   * @link https://docs.nuvei.com/api/main/indexMain_v1_0.html?json#getTransactionDetails
   */
  const SETTLE = 7;

  /**
   *  Void transaction.
   *
   * @link https://docs.nuvei.com/api/main/indexMain_v1_0.html?json#getTransactionDetails
   */
  const VOID = 8;
}

?>