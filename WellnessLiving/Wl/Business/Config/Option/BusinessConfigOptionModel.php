<?php

namespace WellnessLiving\Wl\Business\Config\Option;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves business config options.
 *
 * @method WlModelRequest get() Returns config option values for specified business.
 */
class BusinessConfigOptionModel extends WlModelAbstract
{
  /**
   * List of config option values. Key - config option class CID, value - config option value.
   *
   * @get result
   * @var array
   */
  public $a_option;

  /**
   * Key of business.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>