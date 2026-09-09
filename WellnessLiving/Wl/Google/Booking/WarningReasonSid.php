<?php

namespace WellnessLiving\Wl\Google\Booking;

/**
 * The result of an order fulfillability check.
 *
 * @link https://developers.google.com/maps-booking/reference/rest-api-v3/orderfulfillability-specification#lineitem_definition
 */
class WarningReasonSid
{
  /**
   * This Line Item can be fulfilled and has decreased in price.
   */
  const PRICE_DECREASE = 2;

  /**
   * This Line Item can be fulfilled and has increased in price.
   */
  const PRICE_INCREASE = 1;

  /**
   * Unspecified reason.
   */
  const UNSPECIFIED_WARNING_REASON = 3;
}

?>