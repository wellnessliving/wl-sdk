<?php

namespace WellnessLiving\Wl\Google\Booking;

/**
 * Status data that conveys why creating or updating a booking fails.
 *
 * @link https://developers.google.com/maps-booking/reference/rest-api-v3/bookingfailure-specification
 */
class BookingFailureSid
{
  /**
   * A booking that the user tried to cancel has already been cancelled.
   */
  const BOOKING_ALREADY_CANCELLED = 10;

  /**
   * A booking that the user tried to cancel is not cancellable.
   */
  const BOOKING_NOT_CANCELLABLE = 11;

  /**
   * Default value: Don't use; amounts to an "unknown error".
   */
  const CAUSE_UNSPECIFIED = 16;

  /**
   * Deal is unavailable for the provided slot. If the slot itself is unavailable, please use SLOT_UNAVAILABLE instead.
   */
  const DEAL_UNAVAILABLE = 14;

  /**
   * The lease (if provided) has expired and cannot be used any longer to complete the requested booking.
   */
  const LEASE_EXPIRED = 3;

  /**
   * The requested cancellation cannot be performed at the current time due
   * to time restrictions in the merchant's cancellation policy.
   */
  const OUTSIDE_CANCELLATION_WINDOW = 4;

  /**
   * User has an existing reservation too close to this time.
   */
  const OVERLAPPING_RESERVATION = 12;

  /**
   * An error was encountered while processing the payment for this booking.
   * Use this value to indicate a general payment related error, only if the
   * error does not match to a specific payment error above.
   */
  const PAYMENT_ERROR = 8;

  /**
   * An error was encountered while processing the payment because the
   * provided credit card was declined.
   */
  const PAYMENT_ERROR_CARD_DECLINED = 6;

  /**
   * An error was encountered while processing the payment because the
   * provided credit card type was not accepted by the merchant. The credit
   * card type must be supplied in <tt>rejected_card_type</tt>.
   */
  const PAYMENT_ERROR_CARD_TYPE_REJECTED = 5;

  /**
   * An error was encountered with the pack/membership used to pay for the
   * booking. There could be no valid uses left, it could have expired, etc.
   */
  const PAYMENT_OPTION_NOT_VALID = 7;

  /**
   * Set when payment is rejected because you are requesting that the
   * transaction be tried again, but this time after undergoing 3DS1
   * challenge/response.  Note that the current transaction's failure state
   * will stay failed.  The retry will be completely separate.
   *
   * When this is the failure reason, <tt>payment_failure.3DS1_parameters</tt>
   * MUST be set.  If it is not, then the current cause will be treated as
   * if it were PAYMENT_ERROR.
   */
  const PAYMENT_REQUIRES_3DS1 = 15;

  /**
   * The user has already booked an appointment for the referenced availability slot.
   */
  const SLOT_ALREADY_BOOKED_BY_USER = 2;

  /**
   * The referenced availability slot is not available any longer.
   */
  const SLOT_UNAVAILABLE = 1;

  /**
   * User cannot use the given payment option (e.g. user trying to use a
   * first time price for the second time).
   */
  const USER_CANNOT_USE_PAYMENT_OPTION = 9;

  /**
   * Booking failed due to the user being over the aggregator's per-user bookings limit.
   */
  const USER_OVER_BOOKING_LIMIT = 13;
}

?>