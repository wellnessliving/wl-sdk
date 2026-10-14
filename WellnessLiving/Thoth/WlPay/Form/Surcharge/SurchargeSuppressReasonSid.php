<?php

namespace WellnessLiving\Thoth\WlPay\Form\Surcharge;

/**
 * Why a surcharge was not applied to a source that would otherwise carry one (SAL-1314).
 *
 * Stored on the transaction and shown in the transaction detail view and the All Transactions report, so staff can
 * tell a suppressed surcharge from a merchant that simply has no surcharge configured.
 *
 * Last used id: 4.
 */
class SurchargeSuppressReasonSid
{
  /**
   * The card is a debit or prepaid card.
   *
   * @title Debit or prepaid card
   */
  const DEBIT = 1;

  /**
   * The card type lookup returned no answer for this card.
   *
   * @title Card type unknown
   */
  const LOOKUP_EMPTY = 2;

  /**
   * The card type lookup failed or timed out.
   *
   * @title Card type lookup failed
   */
  const LOOKUP_FAILED = 3;

  /**
   * The payment is card-present and no card type lookup is available before the amount is fixed.
   *
   * @title Card-present payment
   */
  const LOOKUP_UNSUPPORTED = 4;
}

?>