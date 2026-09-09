<?php

namespace WellnessLiving\Wl\Google\Booking;

/**
 * The result of an order fulfillability check.
 *
 * @link https://developers.google.com/maps-booking/reference/rest-api-v3/orderfulfillability-specification
 */
class OrderFulfillabilityResultSid
{
  /**
   * The order can be fulfilled.
   */
  const CAN_FULFILL = 1;

  /**
   * Default value: Don't use.
   */
  const ORDER_FULFILLABILITY_RESULT_UNSPECIFIED = 5;

  /**
   * The order cannot be fulfilled due to reasons that do not fall into the categories above.
   */
  const ORDER_UNFULFILLABLE_OTHER_REASON = 4;

  /**
   * The order cannot be fulfilled due to one or more unfulfillable line item(s).
   */
  const UNFULFILLABLE_LINE_ITEM = 2;

  /**
   * The combination of the line items requested cannot be fulfilled.
   */
  const UNFULFILLABLE_SERVICE_COMBINATION = 3;
}

?>