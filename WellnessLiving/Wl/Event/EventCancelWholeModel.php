<?php

namespace WellnessLiving\Wl\Event;

use WellnessLiving\WlModelAbstract;

/**
 * Cancels a whole event booked by a client.
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