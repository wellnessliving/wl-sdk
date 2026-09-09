<?php

namespace WellnessLiving\Thoth\PayProcessor\Nuvei\NuveiRestApi;

/**
 * `Nuvei` reason for a zero-amount authorization.
 *
 * @link https://docs.nuvei.com/documentation/additional-links/rest-2-0/features/card-flows-operations/zero-authorization/
 */
class NuveiZeroAmountReasonSid
{
  /**
   * Other card verification scenarios not covered by the other constants.
   */
  const ACCOUNT_VERIFICATION = 5;

  /**
   * Cardholder adds a card for future use without an immediate charge.
   *
   * Used when saving a card on file via `Virtual Terminal` or widget booking.
   */
  const ADD_CARD = 1;

  /**
   * A single transaction divided into multiple charges.
   */
  const INSTALLMENTS = 3;

  /**
   * Verify existing card validity without a charge.
   */
  const MAINTAIN_CARD = 4;

  /**
   * Multiple transactions submitted by the merchant per an agreement with the cardholder.
   *
   * Typical use case: gym subscriptions, recurring memberships.
   */
  const RECURRING = 2;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.Nuvei.NuveiRestApi.NuveiZeroAmountReasonSid';
}

?>