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
   * @var array|array[]
   */
  public $a_addon;

  /**
   * Data to show appointment add-ons:<dl>
   *   <dt>array[] <var>a_addon</var></dt>
   *   <dd>Data about appointment add-ons. Each element contains data about single add-on: <dl>
   *     <dt>int <var>i_product</var></dt><dd>Quantity of add-on in appointment.</dd>
   *     <dt>string <var>html_amount</var></dt><dd>Add-on additional amount. Empty string if add-on doesn't have additional amount.</dd>
   *     <dt>string <var>html_duration</var></dt><dd>Add-on additional duration. Empty string if add-on doesn't add duration.</dd>
   *     <dt>string <var>html_title</var></dt><dd>Add-on name.</dd>
   *     <dt>int <var>i_count_paid</var></dt><dd>Quantity of paid add-on in appointment.</dd>
   *     <dt>int <var>i_inventory_current</var></dt><dd>Quantity of current add-on product inventory.</dd>
   *     <dt>bool <var>is_select</var></dt><dd>Whether add-on added to appointment.</dd>
   *     <dt>string <var>k_shop_product_option</var></dt><dd>Add-on product key. Primary key in {@link \RsShopProductOptionSql} table.</dd>
   *     <dt>string <var>url</var></dt><dd>URL to add-on picture. Empty string if add-on doesn't have picture.</dd>
   *   </dl></dd>
   *   <dt>bool <var>is_search</var></dt><dd>Whether add-on search field need to be shown.</dd></dl>
   *
   * @get result
   * @var array
   */
  public $a_addon_data;

  /**
   * Whether we need to update appointment duration.
   *
   * @put post
   * @var bool
   */
  public $is_duration_update = false;

  /**
   * Key of the appointment.
   *
   * @get get
   * @put post
   * @var string
   */
  public $k_appointment;

  /**
   * Business key. Empty string when not set.
   *
   * @get get
   * @put post
   * @var string
   */
  public $k_business = '';
}

?>