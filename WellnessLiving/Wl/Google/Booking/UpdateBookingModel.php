<?php

namespace WellnessLiving\Wl\Google\Booking;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api endpoint used by Google to update booking.
 *
 * **Cross-datacenter compatibility:**
 *
 * @link https://developers.google.com/maps-booking/reference/rest-api-v3/updatebooking-method
 *
 * @method WlModelRequest post()
 */
class UpdateBookingModel extends WlModelAbstract
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
   * Booking to be updated.
   *
   * @field booking
   * @post post
   * @var BookingEntity
   */
  public $o_booking_entity;
}

?>