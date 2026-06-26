<?php

namespace WellnessLiving\Wl\Google\Booking;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * The client requests to create a booking.
 * The partner backend makes a booking for the requested slot, and returns the slot upon success,
 * or business logic error (e.g. if the slot has become unavailable, or if payment is invalid, etc.) upon failure.
 *
 * **Cross-datacenter compatibility:**
 *
 * @link https://developers.google.com/maps-booking/reference/rest-api-v3/createbooking-method
 *
 * @method WlModelRequest post()
 */
class CreateBookingModel extends WlModelAbstract
{
  /**
   * Information about booking.
   *
   * @field booking
   * @post result
   * @var array|null
   */
  public $a_booking;

  /**
   * Information about failure.
   *
   * @field booking_failure
   * @post result
   * @var array|null
   */
  public $a_booking_failure;

  /**
   * Information about payments. When payment authorizations are handled by
   * Google, if the booking request does not succeed, payment authorizations are
   * automatically canceled. (optional)
   *
   * <tt>null</tt> if not specified.
   *
   * @field payment_information
   * @post post
   * @var PaymentInformationEntity
   */
  public $o_payment_information;

  /**
   * The inventory slot that is being requested to make this booking.
   *
   * Slot is provided for the partner to verify the lease information.
   *
   * @field slot
   * @post post
   * @var BookingSlotEntity
   */
  public $o_slot;

  /**
   * Personal information of the user making the appointment.
   *
   * @field user_information
   * @post post
   * @var UserInformationEntity
   */
  public $o_user_information;

  /**
   * A string from the user which contains any special requests or additional
   * information that they would like to notify the merchant about. (optional)
   *
   * <tt>null</tt> if not specified.
   *
   * @field additional_request
   * @post post
   * @var string|null
   */
  public $text_additional_request;

  /**
   * Partner provided deal id associated with this slot. (optional).
   *
   * <tt>null</tt> if not specified.
   *
   * @field deal_id
   * @post post
   * @var string|null
   */
  public $text_deal_id;

  /**
   * Idempotency token for requests.
   *
   * @field idempotency_token
   * @post post
   * @var string
   */
  public $text_idempotency_token;
}

?>