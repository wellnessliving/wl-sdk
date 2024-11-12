<?php

namespace WellnessLiving\Wl\Pay\Processor\Nuvei\Code;

/**
 * CS Message Function code class.
 *
 * Last used ID: 35
 */
class CSMessageFunctionSid
{
  /**
   * Request for reconciliation.
   */
  const BATCH_SETTLEMENT_REQUEST = 12;

  /**
   * Response for reconciliation.
   */
  const BATCH_SETTLEMENT_RESPONSE = 11;

  /**
   * Payment card (credit or debit).
   */
  const CARD = 35;

  /**
   * Request to complete Pre-Auth.
   */
  const COMPLETION_REQUEST = 4;

  /**
   * Response to pre-auth completion request.
   */
  const COMPLETION_RESPONSE = 3;

  /**
   * Send financial data from terminal to point of sale.
   */
  const FINANCIAL_SALE_TO_POS = 7;

  /**
   * Request for authorization with financial capture.
   */
  const PRE_AUTH_REQUEST = 6;

  /**
   * Response for authorization with financial capture.
   */
  const PRE_AUTH_RESPONSE = 5;

  /**
   * Request for Refund.
   */
  const REFUND_REQUEST = 14;

  /**
   * Response for Refund.
   */
  const REFUND_RESPONSE = 13;

  /**
   * Request for reporting.
   */
  const REPORT_REQUEST = 16;

  /**
   * Report response.
   */
  const REPORT_RESPONSE = 15;

  /**
   * Request ticket info from POS.
   */
  const REQUEST_ALL_TICKET_TO_POI = 29;

  /**
   * Request for Crypto Currency.
   */
  const REQUEST_CRYPTO_TO_POI = 33;

  /**
   * Notify Ticket # and amount which terminal doing.
   */
  const REQUEST_SALE_WITH_TICKET_TO_POS = 28;

  /**
   * Request all ticket/invoice list from POS.
   */
  const REQUEST_TABLET_TO_POI = 25;

  /**
   * Unlock Ticket Response from Register.
   */
  const REQUEST_UNLOCK_TICKET_TO_POS = 32;

  /**
   * Response from point of sale to terminal.
   */
  const RESPONSE_CONFIRM_FROM_POS = 8;

  /**
   * Response to Crypto Currency.
   */
  const RESPONSE_CRYPTO_FROM_POS = 34;

  /**
   * Response from Cloud Server.
   */
  const RESPONSE_SALE_FROM_POS = 27;

  /**
   * Response to invoice/ticket detail list to terminal.
   */
  const RESPONSE_TABLE_FROM_POS = 26;

  /**
   * Response to ticket detail list to terminal.
   */
  const RESPONSE_TICKET_FROM_POS = 30;

  /**
   * Request all ticket/invoice list from POS.
   */
  const RESPONSE_UNLOCK_TICKET_FROM_POS = 31;

  /**
   * Advice for reversal with financial capture.
   */
  const REVERSAL_REQUEST = 10;

  /**
   * Advice response for reversal with financial capture.
   */
  const REVERSAL_RESPONSE = 9;

  /**
   * Request for Sale without financial capture.
   */
  const SALE_REQUEST = 1;

  /**
   * Response for Sale without financial capture.
   */
  const SALE_RESPONSE = 2;

  /**
   * Request the management of a session: login, logout and diagnosis services. Initiated by the Sale system.
   */
  const SESSION_MANAGEMENT_REQUEST = 20;

  /**
   * For PAT request.
   */
  const SESSION_MANAGEMENT_REQUEST_Q = 18;

  /**
   * Response to a session management request to initiate/terminate a session.
   */
  const SESSION_MANAGEMENT_RESPONSE = 19;

  /**
   * For PAT response.
   */
  const SESSION_MANAGEMENT_RESPONSE_P = 17;

  /**
   * For TIP adjustment.
   */
  const TIP_ADJUSTMENT_REQUEST = 22;

  /**
   * For TIP adjustment.
   */
  const TIP_ADJUSTMENT_RESPONSE = 21;

  /**
   * Only for Tip adjustment on terminal end.
   */
  const TIP_ADJUSTMENT_SYNC_REQUEST = 24;

  /**
   * Only for Tip adjustment on terminal end from register.
   */
  const TIP_ADJUSTMENT_SYNC_RESPONSE = 23;
}

?>