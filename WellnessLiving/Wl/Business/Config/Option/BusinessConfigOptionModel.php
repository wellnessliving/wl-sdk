<?php

namespace WellnessLiving\Wl\Business\Config\Option;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves business config options.
 *
 * @method WlModelRequest get() Returns config option values for specified business.  Loads every registered business configuration option for the given business and returns its  current value, keyed by the config option class CID.
 */
class BusinessConfigOptionModel extends WlModelAbstract
{
  /**
   * List of config option values.
   * Key - config option class CID.
   * Values - config option value.
   *
   * @get result
   * @var array<int, mixed>
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