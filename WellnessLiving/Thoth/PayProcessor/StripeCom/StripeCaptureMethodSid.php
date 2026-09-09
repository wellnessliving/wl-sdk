<?php

namespace WellnessLiving\Thoth\PayProcessor\StripeCom;

/**
 * Available capture methods.
 *
 * @link https://stripe.com/docs/api/payment_intents/create#create_payment_intent-capture_method
 */
class StripeCaptureMethodSid
{
  /**
   * When the capture method is automatic, Stripe automatically captures funds when the customer authorizes the payment.
   */
  const AUTOMATIC = 1;

  /**
   * Set capture method to manual if you wish to separate authorization and capture for payment methods that support this.
   *
   * @link https://stripe.com/docs/payments/payment-intents/creating-payment-intents#separate-authorization-and-capture
   */
  const MANUAL = 2;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.StripeCom.StripeCaptureMethodSid';
}

?>