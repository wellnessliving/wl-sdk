<?php

namespace WellnessLiving\Wl\Location\Staff;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves information about staff members for the current location.
 *
 * @method WlModelRequest get() Retrieves an information about staff members for the current location.
 */
class ListModel extends WlModelAbstract
{
  /**
   * A list of staff members with information about them. Every element has keys:
   *
   * Deprecated: `k_staff` can be additionally returned for a limited list of third-party apps.
   *
   * <dl>
   *   <dt>string `s_name`</dt>
   *   <dd>Name.</dd>
   * 
   *   <dt>string `s_position`</dt>
   *   <dd>Job title.</dd>
   * 
   *   <dt>string `s_surname`</dt>
   *   <dd>1st letter of surname.</dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>ID as user.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_staff;

  /**
   * ID of a location.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';
}

?>