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
   * <tt>null</tt> if not set yet.
   *
   * @post post
   * @var string|null
   */
  public $k_class = null;

  /**
   * A user ID.
   *
   * @post post
   * @var string|null
   */
  public $uid = null;
}

?>