<?php

namespace WellnessLiving\Thoth\PayProcessor\StripeCom;

/**
 * Payment method types.
 */
class StripePaymentMethodTypeSid
{
  /**
   * Credit card.
   */
  const CARD = 1;

  /**
   * Payment method at a Points of sale - card swiper.
   */
  const CARD_PRESENT = 2;

  /**
   * Interac card present. Canada-specific present cards.
   *
   * @link https://stripe.com/docs/terminal/global?integration-country=CA#interac-payments
   */
  const INTERAC_PRESENT = 3;
}

?>