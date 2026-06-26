<?php

namespace WellnessLiving\Wl\GymPass\Webhook;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api used by Gympass to connect location to integration.
 *
 * @method WlModelRequest post()
 */
class BusinessConnectModel extends WlModelAbstract
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
   * Business key.
   *
   * `null` in a case value is not initialized yet.
   *
   * @post post
   * @var string|null
   */
  public $k_business = null;

  /**
   * Location key.
   *
   * `null` in a case value is not initialized yet.
   *
   * @post post
   * @var string|null
   */
  public $k_location = null;

  /**
   * Event data.
   *
   * @field event_data
   * @post post
   * @var \Wl\GymPass\Webhook\BookingEventEntity
   */
  public $o_event_data = null;

  /**
   * Gym ID.
   *
   * `null` in a case value is not initialized yet.
   *
   * @post post
   * @var string|null
   */
  public $s_gym_id = null;

  /**
   * Product ID.
   *
   * `null` in a case value is not initialized yet.
   *
   * @post post
   * @var string|null
   */
  public $s_product_id = null;
}

?>