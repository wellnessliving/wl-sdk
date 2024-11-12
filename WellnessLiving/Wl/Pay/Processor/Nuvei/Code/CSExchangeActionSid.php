<?php

namespace WellnessLiving\Wl\Pay\Processor\Nuvei\Code;

/**
 * CS Exchange Action code class.
 *
 * Last used ID: 7
 */
class CSExchangeActionSid
{
  /**
   * Cancel the previous transaction.
   */
  const CANCEL_TRANSACTION = 1;

  /**
   * For cancel transaction. It causes this transaction in cancellation status.
   */
  const FORCE_CANCEL_TRANSACTION = 2;

  /**
   * Update status.
   */
  const NOTIFY = 3;

  /**
   * Wait for response from `RecipientParty`.
   */
  const POLL_THE_RESPONSE = 4;

  /**
   * Retrieve the request/response from cloud.
   */
  const RECOVER_REQUEST_RESPONSE = 5;

  /**
   * Retrieve the response from cloud.
   */
  const RETRIEVE_RESPONSE = 6;

  /**
   * Check the terminal status.
   */
  const STATUS_CHECK = 7;
}

?>