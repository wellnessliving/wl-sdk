<?php

namespace WellnessLiving\Thoth\PayProcessor\Nuvei\DMN\Event;

/**
 * Type of the Nuvei Web Hook Payment Gateway transaction.
 *
 * Last used ID: 9.
 *
 * @link https://docs.nuvei.com/documentation/integration/webhooks/payment-dmns/?highlight=ppp_status#Payment_and_Pre-deposit_DMN_Parameters
 */
class NuveiEventTransactionTypeSid
{
  /**
   * To perform an authorization-only request.
   */
  const AUTH = 2;

  /**
   * Chargeback transaction.
   */
  const CHARGEBACK = 5;

  /**
   * Credit transaction.
   */
  const CREDIT = 3;

  /**
   * Modification transaction.
   */
  const MODIFICATION = 6;

  /**
   * Refund transaction.
   */
  const REFUND = 7;

  /**
   * Sale transaction.
   */
  const SALE = 1;

  /**
   *  To perform a regular payment request with 3DS challenge.
   *
   * @link https://docs.nuvei.com/api/main/indexMain_v1_0.html?json#getTransactionDetails
   */
  const SALE3D = 8;

  /**
   * Settle transaction.
   *
   * @link https://docs.nuvei.com/api/main/indexMain_v1_0.html?json#getTransactionDetails
   */
  const SETTLE = 9;

  /**
   * Void transaction.
   */
  const VOID = 4;
}

?>