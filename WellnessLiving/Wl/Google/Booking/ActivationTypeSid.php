<?php

namespace WellnessLiving\Wl\Google\Booking;

/**
 * Defines how the validity start date is determined.
 *
 * @link https://developers.google.com/maps-booking/reference/rest/v1alpha/inventory.partners.merchants#activationtype
 */
class ActivationTypeSid
{
  /**
   * Validity starts when the payment option is used for the first time.
   */
  const ON_FIRST_USE = 2;

  /**
   * Validity starts at the time of purchase.
   */
  const ON_PURCHASE = 1;
}

?>