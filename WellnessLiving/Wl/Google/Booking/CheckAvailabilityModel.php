<?php

namespace WellnessLiving\Wl\Google\Booking;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Check availability for a requested slot.
 * The partner backend verifies that the requested appointment slot is valid and available.
 *
 * **Cross-datacenter compatibility:**
 *
 * @link https://developers.google.com/maps-booking/reference/rest-api-v3/checkavailability-method
 *
 * @method WlModelRequest post()
 */
class CheckAvailabilityModel extends WlModelAbstract
{
  /**
   * @field slot
   * @post result
   * @var array
   */
  public $a_slot;

  /**
   * Count of available slots
   *
   * @field count_available
   * @post result
   * @var int
   */
  public $i_count_available;

  /**
   * The appointment slot that is being checked.
   *
   * @field slot
   * @post post
   * @var BookingSlotEntity
   */
  public $o_slot;
}

?>