<?php

namespace WellnessLiving\Wl\Google\Booking;

/**
 * Prepayment status of a booking.
 *
 * This enumeration is documented in two places: in server and client documentation of Google.
 *
 * @link https://developers.google.com/maps-booking/api-template#other_api_messages
 * @link https://developers.google.com/maps-booking/reference/rest/v1alpha/notification.partners.bookings/patch#prepaymentstatus
 */
class PrepaymentStatusSid
{
  /**
   * The fee for the booking has not been paid in advance.
   */
  const NOT_PROVIDED = 2;

  /**
   * The fee for the booking has been paid in advance.
   */
  const PROVIDED = 1;

  /**
   * The fee was previously PREPAYMENT_PROVIDED but has now been refunded.
   */
  const REFUNDED = 3;

  /**
   * Not specified, defaults to PREPAYMENT_NOT_PROVIDED.
   */
  const STATUS_UNSPECIFIED = 4;
}

?>