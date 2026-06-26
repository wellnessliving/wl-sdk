<?php

namespace WellnessLiving\Wl\Google\Booking;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * This method returns future bookings for a user at any merchant.
 * This method should not return past bookings or cancelled bookings.
 *
 * **Cross-datacenter compatibility:** Thanks to {@link ListBookingsApi::REGION_MERGE}, the request is forwarded to all
 * When all results arrive, they are merged into one result by
 *
 * @link https://developers.google.com/maps-booking/reference/rest-api-v3/listbookings-method
 *
 * @method WlModelRequest post()
 */
class ListBookingsModel extends WlModelAbstract
{
  /**
   * List of booking entity.
   *
   * @field bookings
   * @post result
   * @var array[]
   */
  public $a_booking_list;

  /**
   * ID of the user.
   *
   * @field user_id
   * @post get
   * @var string
   */
  public $s_user_id;
}

?>