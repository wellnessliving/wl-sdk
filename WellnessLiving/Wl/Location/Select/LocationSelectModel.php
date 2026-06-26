<?php

namespace WellnessLiving\Wl\Location\Select;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API point provides the list of locations for a location select HTML component.
 *
 * @method WlModelRequest get() Performs checks and generates a list of locations according to a given configuration.
 */
class LocationSelectModel extends WlModelAbstract
{
  /**
   * Result-defining configuration set.
   *
   * @get get
   * @var array
   */
  public $a_config = [];

  /**
   * Location list with additional parameters for a location select HTML component.
   *
   * @get result
   * @var array
   */
  public $a_select = [];

  /**
   * Business in which a list of locations is requested.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * User who requests a list of locations.
   *
   * Empty string for a guest.
   *
   * @get get
   * @var string
   */
  public $uid = '';
}

?>