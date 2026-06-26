<?php

namespace WellnessLiving\Wl\Catalog\CatalogList;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Checking if client selected in a store
 *
 * @method WlModelRequest get() Checking if client selected in a store when user in a backend
 */
class CatalogProductCheckModel extends WlModelAbstract
{
  /**
   * Data array:
   * <ul>
   *    <li>string <var>uid</var></li>
   *    <li>bool <var>is_backend</var></li>
   *    <li>string <var>k_business</var></li>
   * </ul>
   *
   * @get get
   * @var array
   */
  public $a_data = [];

  /**
   * Whether more products can be loaded.
   *
   * @get result
   * @var bool
   */
  public $is_client_selected = false;

  /**
   * Message to show in a popup.
   *
   * @get result
   * @var string
   */
  public $s_message = 'Please select a client before adding an item to the cart';
}

?>