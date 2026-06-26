<?php

namespace WellnessLiving\Wl\Google\Booking;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * This method returns a booking status for a user based on provided booking ID.
 *
 * **Cross-datacenter compatibility:**
 *
 * @link https://developers.google.com/maps-booking/reference/rest-api-v3/getbookingstatus-method
 *
 * @method WlModelRequest post()
 */
class GetBookingStatusModel extends WlModelAbstract
{
  /**
   * ID of the existing booking.
   *
   * @field booking_id
   * @post get,result
   * @var string
   */
  public $s_booking_id;

  /**
   * @field booking_status
   * @post result
   * @var string|null
   */
  public $s_booking_status;

  /**
   * @field prepayment_status
   * @post result
   * @var string|null
   */
  public $s_prepayment_status;
}

?>