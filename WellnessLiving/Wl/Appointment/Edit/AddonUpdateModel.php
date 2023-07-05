<?php

namespace WellnessLiving\Wl\Appointment\Edit;

use WellnessLiving\WlModelAbstract;

/**
 * Update add-ons for appointment.
 *
 * This endpoint can be used to update add-ons in existing appointment.
 */
class AddonUpdateModel extends WlModelAbstract
{
  /**
   * Addons for appointment.
   *
   * Old format - array where each value is key of add-on.
   * New format - each element is an array: <dl>
   *   <dt>int <var>i_product</var></dt><dd>Add-on count</dd>
   *   <dt>string <var>k_shop_product_option</var></dt><dd>Key of add-on.</dd>
   * </dl>
   *
   * @put put
   * @var array
   */
  public $a_addon;

  /**
   * Key of the appointment.
   *
   * @put put
   * @var string
   */
  public $k_appointment;
}

?>