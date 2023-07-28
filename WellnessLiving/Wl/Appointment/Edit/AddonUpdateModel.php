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
   *   <dt>int <var>i_product</var></dt><dd>Add-on count. Max value is 255.</dd>
   *   <dt>string <var>k_shop_product_option</var></dt><dd>Key of add-on.</dd>
   * </dl>
   *
   * @put post
   * @var array
   */
  public $a_addon;

  /**
   * Key of the appointment.
   *
   * @put post
   * @var string
   */
  public $k_appointment;
}

?>