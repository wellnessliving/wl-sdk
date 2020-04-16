<?php

namespace WellnessLiving\Wl\Event;

use WellnessLiving\WlModelAbstract;

/**
 * Cancels whole event booked by client.
 */
class EventCancelWholeModel extends WlModelAbstract
{
  /**
   * Event key.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post get
   * @var string|null
   */
  public $k_class = null;

  /**
   * User ID.
   *
   * @post get
   * @var string|null
   */
  public $uid = null;
}

?>