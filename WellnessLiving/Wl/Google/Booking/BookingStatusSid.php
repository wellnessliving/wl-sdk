<?php

namespace WellnessLiving\Wl\Google\Booking;

/**
 * Status of the booking.
 *
 * This enumeration is documented in two places of Google Booking API documentation: for server, and for client.
 *
 * @link https://developers.google.com/maps-booking/api-template#other_api_messages
 * @link https://developers.google.com/maps-booking/reference/rest/v1alpha/notification.partners.bookings/patch#BookingStatus
 */
class BookingStatusSid
{
  /**
   * Not specified.
   */
  const BOOKING_STATUS_UNSPECIFIED = 8;

  /**
   * Booking has been canceled on behalf of the user. If the cancellation occurs too late - after the expiration of the
   * cancellation window - then no automatic refund will be initiated. The merchant can still trigger a manual refund.
   */
  const CANCELED = 4;

  /**
   * Booking has been canceled on behalf of the merchant. An automatic refund of any provided payment will be initiated.
   *
   * Example use case: A gym class is canceled due to instructor illness.
   */
  const CANCELED_AUTOMATIC_REFUND = 7;

  /**
   * Booking has been confirmed.
   */
  const CONFIRMED = 1;

  /**
   * User did not show for the appointment.
   */
  const NO_SHOW = 5;

  /**
   * User did not show for the appointment in violation of the cancellation policy.
   */
  const NO_SHOW_PENALIZED = 6;

  /**
   * Booking is awaiting confirmation by the merchant before it can transition into
   */
  const PENDING_MERCHANT_CONFIRMATION = 2;

  /**
   * Booking is awaiting confirmation by the user before it can transition into
   *
   * This status has different names in server and client implementations.
   * In server implementation, it is read as <tt>PENDING_USER_CONFIRMATION</tt>, but in client implementation should
   * read <tt>PENDING_CLIENT_CONFIRMATION</tt>.
   *
   * By email, Google support said that correct reading is <tt>PENDING_CLIENT_CONFIRMATION</tt>, but only
   * <tt>PENDING_USER_CONFIRMATION</tt> understood by gRPC service. For this reason, <tt>PENDING_USER_CONFIRMATION</tt>
   * is selected to name this constant.
   *
   * Be careful when you change this constant. When {@link BookingStatusSid::packGoogle()} is called to form message for
   * gRPC service, <tt>PENDING_USER_CONFIRMATION</tt> should be returned.
   */
  const PENDING_USER_CONFIRMATION = 3;
}

?>