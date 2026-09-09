<?php

namespace WellnessLiving\Wl\Google\Booking;

/**
 * A list of payment option types.
 *
 * @link https://developers.google.com/maps-booking/reference/rest/v1alpha/inventory.partners.merchants#paymentoptiontype
 */
class PaymentOptionSid
{
  /**
   * Payment option can be used if its session count > 0.
   */
  const MULTI_USE = 2;

  /**
   * Payment option can only be used once.
   */
  const SINGLE_USE = 1;

  /**
   * Unused.
   */
  const TYPE_UNSPECIFIED = 4;

  /**
   * Payment option can be used within its valid time range - session count is inapplicable.
   */
  const UNLIMITED = 3;
}

?>