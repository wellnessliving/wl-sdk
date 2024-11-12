<?php

namespace WellnessLiving\Wl\Pay\Processor\Nuvei\Code;

/**
 * CS Service Content code class.
 *
 * Last used ID: 6
 */
class CSServiceContentSid
{
  /**
   * The Sale System requests to the terminal to perform a payment (Purchase/ Refund/PWCB/MOTO Payment/...).
   */
  const FINANCIAL_PAYMENT_REQUEST = 4;

  /**
   * The terminal sends a response to a payment request (Purchase/refund/ PWCB/MOTO Payment/...).
   */
  const FINANCIAL_PAYMENT_RESPONSE = 2;

  /**
   * The Sale System request to the terminal different kinds of transaction reconciliation.
   */
  const FINANCIAL_RECONCILIATION_REQUEST = 6;

  /**
   * The terminal sends a response to a reconciliation request.
   */
  const FINANCIAL_RECONCILIATION_RESPONSE = 1;

  /**
   * The Sale System requests to the terminal to perform a reversal partial or complete to cancel a former payment service.
   */
  const FINANCIAL_REVERSAL_REQUEST = 5;

  /**
   * The terminal sends a response to a reversal request.
   */
  const FINANCIAL_REVERSAL_RESPONSE = 3;
}

?>