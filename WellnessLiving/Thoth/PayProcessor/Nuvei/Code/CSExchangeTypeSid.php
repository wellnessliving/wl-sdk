<?php

namespace WellnessLiving\Thoth\PayProcessor\Nuvei\Code;

/**
 * CS Exchange Type class.
 *
 * Last used ID: 10
 *
 * @link Thoth/PayProcessor/Nuvei/doc/OMNI_Channel_ISO20022_V2.38.pdf 7.3.7.
 */
class CSExchangeTypeSid
{
  /**
     * Accept the request from terminal.
     */
  const ACCEPT = 1;

  /**
     * Transaction cannot be cancelled.
     */
  const CANNOT_CANCEL = 2;

  /**
     * Register receives the response from terminal and ACK to cloud.
     */
  const COMPLETION = 3;

  /**
     * Duplicate transaction found.
     */
  const DUPLICATION = 4;

  /**
     * Cloud receives Auth from register.
     */
  const INITIATED = 5;

  /**
     * A pending transaction on the cloud.
     */
  const PENDING = 6;

  /**
     * Terminal sends response to cloud.
     */
  const RESPONSE = 7;

  /**
     * Timeout/ Expired.
     */
  const TIMEOUT = 8;

  /**
     * Transaction has been cancelled.
     */
  const TRANSACTION_CANCELLED = 9;

  /**
     * Transaction not found.
     */
  const TRANSACTION_NOT_FOUND = 10;

  /**
     * @inheritDoc
     */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.Nuvei.Code.CSExchangeTypeSid';
}

?>