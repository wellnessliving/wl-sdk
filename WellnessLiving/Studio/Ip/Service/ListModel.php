<?php

namespace WellnessLiving\Studio\Ip\Service;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns a list of IP services.
 *
 * @method WlModelRequest get() Returns a list of IP services.
 */
class ListModel extends WlModelAbstract
{
  /**
   * A list of IP services.
   *
   * @get result
   * @var array[]
   */
  public $a_list;
}

?>