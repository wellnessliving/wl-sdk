<?php

namespace WellnessLiving\Thoth\PayProcessor\StripeCom;

/**
 * Payment method types.
 *
 * @link https://stripe.com/docs/api/payment_methods/object#payment_method_object-type
 */
class StripePaymentMethodSid
{
  /**
   * ACSS Debit.
   *
   * @link https://stripe.com/docs/api/payment_methods/object?lang=php#payment_method_object-acss_debit
   */
  const ACSS_DEBIT = 4;

  /**
   * Card.
   *
   * @link https://stripe.com/docs/api/payment_methods/object?lang=php#payment_method_object-card
   */
  const CARD = 1;

  /**
   * Stripe Terminal is used to collect in-person card payments.
   *
   * @link https://stripe.com/docs/api/payment_methods/object?lang=php#payment_method_object-card_present
   */
  const CARD_PRESENT = 2;

  /**
   * Payment to connected account.
   */
  const STRIPE_ACCOUNT = 5;

  /**
   * ACH Direct Debit is used to debit US bank accounts through the Automated Clearing House (ACH) payments system.
   *
   * @link https://stripe.com/docs/api/payment_methods/object?lang=php#payment_method_object-us_bank_account
   */
  const US_BANK_ACCOUNT = 3;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.StripeCom.StripePaymentMethodSid';
}

?>