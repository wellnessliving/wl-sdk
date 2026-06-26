<?php

namespace WellnessLiving\Wl\GymPass\Webhook;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Booking creation.
 *
 * @link https://developers.gympass.com/product/booking-api/1.0/webhooks#post---bookingrequested
 *
 * @method WlModelRequest post()
 */
class BookingCreateModel extends WlModelAbstract
{
  /**
   * Event type.
   *
   * @field event_type
   * @post post
   * @var \Wl\GymPass\Webhook\EventTypeSid
   */
  public $id_event_type = null;

  /**
   * Event data.
   *
   * @field event_data
   * @post post
   * @var \Wl\GymPass\Webhook\BookingEventEntity
   */
  public $o_event_data = null;
}

?>