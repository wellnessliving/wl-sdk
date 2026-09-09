<?php

namespace WellnessLiving\Thoth\PayProcessor\Nuvei\NuveiRestApi;

/**
 * List of `Nuvei` transaction status.
 *
 * Last used ID: 7.
 *
 * @link https://docs.nuvei.com/api/main/indexMain_v1_0.html?json#payment
 */
class NuveiTransactionStatusSid
{
  /**
   * The transaction was authorized and approved.
   */
  const APPROVED = 1;

  /**
   * The transaction authorization failed.
   */
  const DECLINED = 2;

  /**
   * An error occurred.
   *
   * @link https://docs.nuvei.com/documentation/integration/response-handling/
   */
  const ERROR = 3;

  /**
   * The transaction is being processed by the APM provider.
   */
  const PENDING = 5;

  /**
   * The transaction was not completed. The end user needs to be redirected to a webpage to complete the transaction.
   *
   * There are two cases in which this response is returned:
   * * 3D-Secure – The user needs to be redirected to `paymentOption.threeD.acsUrl`.
   *   More details: {@link https://docs.nuvei.com/?p=1854#example-payment-response-for-3d-secure-v2}.
   * * An APM method that requires redirection – The URL is on `paymentOption.redirectURL`.
   *   More details: {@link https://docs.nuvei.com/?p=2124#example-payment-response}.
   */
  const REDIRECT = 4;

  /**
   * The unexpected transaction’s status.
   *
   * Note: There is no such status on Nuvei side. This status was added for any not expected value returned by Nuvei.
   */
  const UNEXPECTED = 7;

  /**
   * Indicates an update to the transaction’s status.
   *
   * @link https://docs.nuvei.com/documentation/integration/webhooks/payment-dmns/#apms-and-dmns
   */
  const UPDATE = 6;
}

?>