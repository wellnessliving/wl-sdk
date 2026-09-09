<?php

namespace WellnessLiving\Thoth\PayProcessor\StripeCom\Terminal;

/**
 * Stripe device type of reader.
 *
 * @link https://stripe.com/docs/api/terminal/readers/object?lang=php#terminal_reader_object-device_type
 *
 * Last used id: 6.
 * Removed: BBPOS_CHIPPER2X = 3.
 */
class StripeReaderModelSid
{
  /**
   * The BBPOS Wise Pad 3 is a handheld reader for use with mobile applications.
   *
   * @link https://stripe.com/docs/terminal/readers/bbpos-wisepad3
   */
  const BBPOS_WISEPAD3 = 1;

  /**
   * The BBPOS Wise POS E is a countertop reader for Stripe Terminal apps.
   * It connects to the Stripe Terminal SDK over the internet.
   *
   * @link https://stripe.com/docs/terminal/readers/bbpos-wisepos-e
   */
  const BBPOS_WISEPOS_E = 4;

  /**
   * SIMULATED Wise POS E.
   */
  const SIMULATED_WISEPOS_E = 6;

  /**
   * Stripe Reader M2 is a small, robust reader for use with mobile applications.
   *
   * @link https://stripe.com/docs/terminal/payments/setup-reader/stripe-m2
   */
  const STRIPE_M2 = 2;
}

?>