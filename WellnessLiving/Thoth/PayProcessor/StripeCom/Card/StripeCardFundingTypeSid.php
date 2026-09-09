<?php

namespace WellnessLiving\Thoth\PayProcessor\StripeCom\Card;

/**
 * Stripe Card funding type.
 *
 * Last used id: 4.
 */
class StripeCardFundingTypeSid
{
  /**
   * Credit.
   */
  const CREDIT = 1;

  /**
   * Debit.
   */
  const DEBIT = 2;

  /**
   * Prepaid.
   */
  const PREPAID = 3;

  /**
   * Unknown.
   */
  const UNKNOWN = 4;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.StripeCom.Card.StripeCardFundingTypeSid';
}

?>