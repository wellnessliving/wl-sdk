<?php

namespace WellnessLiving\Wl\Event;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Reorganize periods of the event between event instances.
 *
 * @method WlModelRequest post() This method is called to process POST query.
 */
class EventReorganizeModel extends WlModelAbstract
{
  /**
   * List of the class periods' keys which should be reorganized.
   *
   * @post post
   * @var string[]
   */
  public $a_class_period;

  /**
   * Class key.
   * Destination class.
   *
   * @post post
   * @var string
   */
  public $k_class;
}

?>