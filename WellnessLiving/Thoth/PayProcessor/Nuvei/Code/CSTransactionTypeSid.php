<?php

namespace WellnessLiving\Thoth\PayProcessor\Nuvei\Code;

/**
 * CS Transaction Type code class.
 * See Nuvei/doc/OMNI_Channel_ISO20022_V2.38.pdf 7.3.15.
 *
 * Last used ID: 7
 */
class CSTransactionTypeSid
{
  /**
   * Balance enquiry.
   */
  const BALANCE = 1;

  /**
   * Card Payment.
   */
  const CARD_PAYMENT = 2;

  /**
   * Card Verification.
   */
  const CARD_VERIFICATION = 3;

  /**
   * Cash Payment.
   */
  const CASH_PAYMENT = 7;

  /**
   * Quasi-Cash.
   */
  const QUASI_CASH = 4;

  /**
   * Refund Transaction.
   */
  const REFUND = 5;

  /**
   * Outstanding Reservation transactions.
   */
  const RESERVATION = 6;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.Nuvei.Code.CSTransactionTypeSid';
}

?>