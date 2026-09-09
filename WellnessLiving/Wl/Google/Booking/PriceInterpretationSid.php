<?php

namespace WellnessLiving\Wl\Google\Booking;

/**
 * Describes how a Price should be interpreted and displayed to the user.
 *
 * @link https://developers.google.com/maps-booking/reference/feed-specifications/services-feed#priceinterpretation_definition
 */
class PriceInterpretationSid
{
  /**
   * When the price should be interpreted as a specific value.
   *
   * Examples: $20 for a yoga class; $15 for a child haircut.
   */
  const EXACT_AMOUNT = 1;

  /**
   * When the price of a service is variable and no price information is displayed to consumers ahead of time.
   */
  const NOT_DISPLAYED = 3;

  /**
   * Price interpretation unspecified, defaults to {@link PriceInterpretationSid::EXACT_AMOUNT}.
   */
  const PRICE_INTERPRETATION_UNSPECIFIED = 4;

  /**
   * When the price of a service is variable but a minimum price is known and
   * displayed to consumers. Consumers may make choices which increase the
   * price.
   *
   * Note that any service that uses this interpretation must use {@link PrepaymentTypeSid::NOT_SUPPORTED}.
   *
   * Examples: $30 for dog grooming, but additional consumer choices may increase the price.
   */
  const STARTS_AT = 2;
}

?>