<?php

namespace WellnessLiving\Thoth\PayProcessor\Nuvei\DMN\Event;

/**
 * Status of the Nuvei Web Hook Payment Gateway transaction.
 *
 * Last used ID: 6.
 *
 * @link https://docs.nuvei.com/documentation/integration/webhooks/payment-dmns/?highlight=ppp_status#Payment_and_Pre-deposit_DMN_Parameters
 */
class NuveiEventTransactionStatusSid
{
  /**
   * The transaction was approved.
   */
  const APPROVED = 1;

  /**
   * The transaction was declined.
   */
  const DECLINED = 3;

  /**
   * An error occurred.
   */
  const ERROR = 4;

  /**
   * Pending transaction.
   */
  const PENDING = 5;

  /**
   * Success transaction.
   */
  const SUCCESS = 2;

  /**
   * The transaction was updated.
   */
  const UPDATE = 6;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.Nuvei.DMN.Event.NuveiEventTransactionStatusSid';
}

?>