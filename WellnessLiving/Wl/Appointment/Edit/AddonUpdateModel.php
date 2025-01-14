<?php

namespace WellnessLiving\Wl\Appointment\Edit;

use WellnessLiving\WlModelAbstract;

/**
 * Updates add-ons for an appointment.
 *
 * This endpoint can be used to update add-ons for existing appointments.
 */
class AddonUpdateModel extends WlModelAbstract
{
  /**
   * The appointment addon-ons.
   *
   * Old format - an array where each value is key of the add-on.
   * New format - each element is an array: <dl>
   *   <dt>int <var>i_product</var></dt><dd> The add-on count. Max value is 255.</dd>
   *   <dt>string <var>k_shop_product_option</var></dt><dd>The add-on key.</dd>
   * </dl>
   *
   * @put post
   * @var array|array[]
   */
  public $a_addon;

  /**
   * Data to show appointment add-ons:<dl>
   *   <dt>array[] <var>a_addon</var></dt>
   *   <dd>Data about appointment add-ons. Each element contains data about a single add-on: <dl>
   *     <dt>int <var>i_product</var></dt><dd>The add-on's quantity.</dd>
   *     <dt>string <var>html_amount</var></dt><dd>The add-on's additional amount. This will be an empty string if the add-on doesn't have an additional amount.</dd>
   *     <dt>string <var>html_duration</var></dt><dd>The add-on's additional duration. This will be an empty string if the add-on doesn't add duration.</dd>
   *     <dt>string <var>html_title</var></dt><dd>The add-on's name.</dd>
   *     <dt>int <var>i_count_paid</var></dt><dd>The quantity paid for the add-on.</dd>
   *     <dt>int <var>i_inventory_current</var></dt><dd>The add-ons inventory count.</dd>
   *     <dt>bool <var>is_select</var></dt><dd>Determines whether the add-on is added to appointment.</dd>
   *     <dt>string <var>k_shop_product_option</var></dt><dd>The add-on product key.</dd>
   *     <dt>string <var>url</var></dt><dd>The URL for the add-on picture. This will be an empty string if the add-on doesn't have a picture.</dd>
   *   </dl></dd>
   *   <dt>bool <var>is_search</var></dt><dd>Determines whether the add-on search field needs to be shown.</dd></dl>
   *
   * @get result
   * @var array
   */
  public $a_addon_data;

  /**
   * Determines whether the appointment duration needs to be updated.
   *
   * @put post
   * @var bool
   */
  public $is_duration_update = false;

  /**
   * The appointment key.
   *
   * @get get
   * @put get
   * @var string
   */
  public $k_appointment;

  /**
   * The business key. This will be an empty string if not set yet.
   *
   * @get get
   * @put get
   * @var string
   */
  public $k_business = '';
}

?>