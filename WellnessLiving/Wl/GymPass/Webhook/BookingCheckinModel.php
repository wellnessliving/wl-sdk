<?php

namespace WellnessLiving\Wl\GymPass\Webhook;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Booking check-in.
 *
 * @link https://developers.gympass.com/product/booking-api/1.0/webhooks#post-----checkin
 *
 * @method WlModelRequest post()
 */
class BookingCheckinModel extends WlModelAbstract
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
   * @var CheckinEventEntity
   */
  public $o_event_data;
}

?>