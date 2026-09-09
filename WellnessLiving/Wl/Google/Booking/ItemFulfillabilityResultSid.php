<?php

namespace WellnessLiving\Wl\Google\Booking;

/**
 * The result of a line item fulfillability check.
 *
 * @link https://developers.google.com/maps-booking/reference/rest-api-v3/orderfulfillability-specification#lineitemfulfillability_definition
 */
class ItemFulfillabilityResultSid
{
  /**
   * This line item can be fulfilled.
   */
  const CAN_FULFILL = 1;

  /**
   * Child tickets cannot be booked without an adult ticket.
   */
  const CHILD_TICKETS_WITHOUT_ADULT = 6;

  /**
   * The total price of this line item is not correct.
   */
  const INCORRECT_PRICE = 4;

  /**
   * Default value: Don't use.
   */
  const ITEM_FULFILLABILITY_RESULT_UNSPECIFIED = 8;

  /**
   * The line item cannot be fulfilled for reasons that do not fall into the categories above.
   */
  const ITEM_UNFULFILLABLE_OTHER_REASON = 5;

  /**
   * No adequate availability for the slot requested.
   */
  const SLOT_UNAVAILABLE = 2;

  /**
   * The line item cannot be fulfilled since a ticket constraint specified by the partner has been violated.
   */
  const TICKET_CONSTRAINT_VIOLATED = 7;

  /**
   * The combination of ticket types requested cannot be fulfilled.
   */
  const UNFULFILLABLE_TICKET_COMBINATION = 3;
}

?>