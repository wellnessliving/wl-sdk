<?php

namespace WellnessLiving\Wl\Event;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Cancels a whole event booked by a client.
 *
 * @method WlModelRequest post() Cancels book of event {@link \Wl\Event\EventCancelWholeApi::$k_class}.  Used when a client wants to drop out of a multi-session event entirely. Cancels all remaining upcoming sessions at once, including any waitlisted spots, without requiring the client to cancel each session individually.
 */
class EventCancelWholeModel extends WlModelAbstract
{
  /**
   * Key of the business in which the class resides.
   *
   * @post post
   * @var string
   */
  public $k_business = '0';

  /**
   * An event key.
   *
   * @post post
   * @var string
   */
  public $k_class = '0';

  /**
   * A user key.
   *
   * @post post
   * @var string
   */
  public $uid = '0';
}

?>