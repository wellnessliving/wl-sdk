<?php

namespace WellnessLiving\Thoth\PayHardware\Nuvei;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Endpoint for retrieve list of `nuvei` hardware.
 *
 * @method WlModelRequest get()
 */
class NuveiHardwareListModel extends WlModelAbstract
{
  /**
   * List of available hardware.
   *
   * @get result
   * @var array
   */
  public $a_list = [];

  /**
   * Reader status ID for filter.
   *
   * @get get
   * @var int
   */
  public $id_status = 2;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Text filter.
   *
   * @get get
   * @var string|null
   */
  public $text_search = null;
}

?>