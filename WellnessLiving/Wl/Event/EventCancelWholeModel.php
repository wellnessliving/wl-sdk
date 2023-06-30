<?php

namespace WellnessLiving\Wl\Event;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that cancels a whole event booked by a client.
 */
class EventCancelWholeModel extends WlModelAbstract
{
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