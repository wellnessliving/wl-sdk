<?php

namespace WellnessLiving\Thoth\PayProcessor\StripeCom\Card;

/**
 * Stripe results of the check.
 *
 * Last used id: 4.
 */
class StripeCheckResultSid
{
  /**
   * Failed.
   */
  const FAIL = 2;

  /**
   * Passed.
   */
  const PASS = 1;

  /**
   * Unavailable.
   */
  const UNAVAILABLE = 3;

  /**
   * Unchecked.
   */
  const UNCHECKED = 4;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.StripeCom.Card.StripeCheckResultSid';
}

?>