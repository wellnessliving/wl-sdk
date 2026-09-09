<?php

namespace WellnessLiving\Wl\Google\Booking;

/**
 * @link https://developers.google.com/actions-center/verticals/appointments/redirect/reference/feeds/services-feed#RangeInterpretation-definition
 */
class InterpretationSid
{
  /**
   * When range represents an exact value (such that min value equals to max)
   * Will be interpreted as a specific value.
   */
  const INTERPRETATION_EXACT = 1;

  /**
   * When the range is variable and no min value is known.
   * No information is displayed to consumers ahead of time.
   */
  const INTERPRETATION_NOT_DISPLAYED = 4;

  /**
   * When the range is variable and both minimum and maximum values are known and displayed to consumers.
   */
  const INTERPRETATION_RANGE = 3;

  /**
   * When only minimum of the range is known and displayed to consumers.
   * The maximum value will be decided based on other configurations
   * (e.g., price may go up if consumer selecting add-ons)
   */
  const INTERPRETATION_STARTS_AT = 2;
}

?>