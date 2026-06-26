<?php

namespace WellnessLiving\Studio\Ip\Bot;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns a list of bots of IP services.
 *
 * @method WlModelRequest get() Returns a list of bots of IP services.
 */
class ListModel extends WlModelAbstract
{
  /**
   * A list of bots of IP services.
   *
   * @get result
   * @var array[]
   */
  public $a_list;
}

?>