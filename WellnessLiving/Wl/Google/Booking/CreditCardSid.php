<?php

namespace WellnessLiving\Wl\Google\Booking;

/**
 * A list of credit card types.
 *
 * @link https://developers.google.com/maps-booking/reference/rest/v1alpha/inventory.partners.merchants#creditcardtype
 */
class CreditCardSid
{
  /**
   * An American Express credit card.
   */
  const AMERICAN_EXPRESS = 1;

  /**
   * Unused.
   */
  const CREDIT_CARD_TYPE_UNSPECIFIED = 0;

  /**
   * A Discover credit card.
   */
  const DISCOVER = 2;

  /**
   * A Mastercard credit card.
   */
  const MASTERCARD = 3;

  /**
   * A Visa credit card.
   */
  const VISA = 4;
}

?>