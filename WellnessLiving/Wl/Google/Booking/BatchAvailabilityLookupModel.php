<?php

namespace WellnessLiving\Wl\Google\Booking;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Checks availability for specific time slot.
 *
 * @link https://developers.google.com/maps-booking/reference/rest-api-v3/batchavailabilitylookup-method
 *
 * @method WlModelRequest post()
 */
class BatchAvailabilityLookupModel extends WlModelAbstract
{
  /**
   * Multiple slot times to be checked for availability.
   *
   * @field slot_time
   * @post post
   * @var BookingSlotTimeEntity[]
   */
  public $a_slot_time = [];

  /**
   * Availability slot times.
   *
   * @field slot_time_availability
   * @post result
   * @var array
   */
  public $a_slot_time_availability;

  /**
   * ID of the merchant.
   *
   * @field merchant_id
   * @post post
   * @var string
   */
  public $s_merchant_id;
}

?>