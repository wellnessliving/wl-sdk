<?php

namespace WellnessLiving\Thoth\PayProcessor\StripeCom;

/**
 * Available Payment Intent confirmation methods.
 *
 * @link https://stripe.com/docs/api/payment_intents/create#create_payment_intent-confirmation_method
 */
class StripePaymentIntentConfirmationMethodSid
{
  /**
   * Payment Intent can be confirmed using a publishable key. After <tt>next_actions</tt> are handled, no additional
   * confirmation is required to complete the payment.
   */
  const AUTOMATIC = 1;

  /**
   * All payment attempts must be made using a secret key. The Payment Intent returns to the <tt>requires_confirmation</tt>
   * state after handling <tt>next_actions</tt>, and requires your server to initiate each payment attempt with an explicit
   * confirmation.
   */
  const MANUAL = 2;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.StripeCom.StripePaymentIntentConfirmationMethodSid';
}

?>