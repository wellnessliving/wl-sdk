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
   * New format - each element is an array: 
   *
   * @put post
   * @var string[]|array[]
   */
<dl>
  <dt>int `i_product`</dt>
  <dd>The add-on count. Max value is 255.</dd>

  <dt>int `i_use`</dt>
  <dd>The add-on use count. Max value is 255. Not set means same value as add-on count.</dd>

  <dt>string `k_shop_product_option`</dt>
  <dd>The add-on key. 
</dl>
  public $a_addon;

  /**
   * Data to show appointment add-ons:
   *
   * @get result
   * @var array
   */
<dl>
  <dt>array[] `a_addon`</dt>
  <dd>
    Data about appointment add-ons.

      <dt>string `html_amount`</dt>
      <dd>Formatted HTML price of the addon.</dd>

      <dt>string `html_duration`</dt>
      <dd>HTML-escaped duration text.</dd>

      <dt>string `html_title`</dt>
      <dd>HTML-escaped addon title.</dd>

      <dt>int `i_count_banked`</dt>
      <dd>Pre-purchased units the client has; at least 0.</dd>

      <dt>int `i_count_paid`</dt>
      <dd>Paid units in the current appointment.</dd>

      <dt>int `i_count_unpaid`</dt>
      <dd>Unpaid units in the current appointment.</dd>

      <dt>int `i_count_use`</dt>
      <dd>Used units in the current appointment.</dd>

      <dt>int `i_product`</dt>
      <dd>Total product count for this appointment: `i_count_paid` plus `i_count_unpaid`.</dd>

      <dt>bool `is_disable`</dt>
      <dd>`true` when the addon has no products or is not active.</dd>
    </dl>
  </dd>

  <dt>array[] `a_addon_buy`</dt>
  <dd>
    Add-ons available for purchase: zero quantity, zero usage quantity, and zero banked quantity.
 
      <dt>string `html_amount`</dt>
      <dd>Formatted HTML price of the addon.</dd>

      <dt>string `html_duration`</dt>
      <dd>HTML-escaped duration text.</dd>

      <dt>string `html_title`</dt>
      <dd>HTML-escaped addon title.</dd>

      <dt>int `i_count_banked`</dt>
      <dd>Pre-purchased units the client has; at least 0.</dd>

      <dt>int `i_count_paid`</dt>
      <dd>Paid units in the current appointment.</dd>

      <dt>int `i_count_unpaid`</dt>
      <dd>Unpaid units in the current appointment.</dd>

      <dt>int `i_count_use`</dt>
      <dd>Used units in the current appointment.</dd>

      <dt>int `i_product`</dt>
      <dd>Total product count for this appointment: `i_count_paid` plus `i_count_unpaid`.</dd>

      <dt>bool `is_disable`</dt>
      <dd>`true` when the addon has no products or is not active.</dd>
    </dl>
  </dd>

  <dt>array[] `a_addon_own`</dt>
  <dd>
    Add-ons already owned but not selected: zero quantity, zero usage quantity, non-zero banked quantity.
 
      <dt>string `html_amount`</dt>
      <dd>Formatted HTML price of the addon.</dd>

      <dt>string `html_duration`</dt>
      <dd>HTML-escaped duration text.</dd>

      <dt>string `html_title`</dt>
      <dd>HTML-escaped addon title.</dd>

      <dt>int `i_count_banked`</dt>
      <dd>Pre-purchased units the client has; at least 0.</dd>

      <dt>int `i_count_paid`</dt>
      <dd>Paid units in the current appointment.</dd>

      <dt>int `i_count_unpaid`</dt>
      <dd>Unpaid units in the current appointment.</dd>

      <dt>int `i_count_use`</dt>
      <dd>Used units in the current appointment.</dd>

      <dt>int `i_product`</dt>
      <dd>Total product count for this appointment: `i_count_paid` plus `i_count_unpaid`.</dd>

      <dt>bool `is_disable`</dt>
      <dd>`true` when the addon has no products or is not active.</dd>
    </dl>
  </dd>

  <dt>array[] `a_addon_select`</dt>
  <dd>
    Add-ons selected for this appointment: non-zero quantity or non-zero usage quantity.
 
      <dt>string `html_amount`</dt>
      <dd>Formatted HTML price of the addon.</dd>

      <dt>string `html_duration`</dt>
      <dd>HTML-escaped duration text.</dd>

      <dt>string `html_title`</dt>
      <dd>HTML-escaped addon title.</dd>

      <dt>int `i_count_banked`</dt>
      <dd>Pre-purchased units the client has; at least 0.</dd>

      <dt>int `i_count_paid`</dt>
      <dd>Paid units in the current appointment.</dd>

      <dt>int `i_count_unpaid`</dt>
      <dd>Unpaid units in the current appointment.</dd>

      <dt>int `i_count_use`</dt>
      <dd>Used units in the current appointment.</dd>

      <dt>int `i_product`</dt>
      <dd>Total product count for this appointment: `i_count_paid` plus `i_count_unpaid`.</dd>

      <dt>bool `is_disable`</dt>
      <dd>`true` when the addon has no products or is not active.</dd>
    </dl>
  </dd>

  <dt>bool `is_addon_banking`</dt>
  <dd>Whether at least one of appointment add-ons is bankable.</dd>

  <dt>bool `is_all_addon_selected`</dt>
  <dd>Whether all appointment add-ons have non-zero quantity or non-zero usage quantity.</dd>

  <dt>bool `is_search`</dt>
  <dd>Determines whether the add-on search field needs to be shown.</dd>
</dl>
  public $a_addon_data;

  /**
   * List of user keys to get add-ons for. Not empty only when getting add-ons for new appointment
   * ({@link AddonUpdateModel::$k_appointment} is null). User key '-1' means walk-in, user key '0' means new user
   * (user will be created together with appointment).
   *
   * @get get
   * @var string[]
   */
  public $a_uid = [];

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

  /**
   * Location key.
   * Not empty only when getting add-ons for new appointment ({@link AddonUpdateModel::$k_appointment} is null).
   *
   * @get get
   * @var string
   */
  public $k_location = '';

  /**
   * Service key.
   * Not empty only when getting add-ons for new appointment ({@link AddonUpdateModel::$k_appointment} is null).
   *
   * @get get
   * @var string
   */
  public $k_service = '';
}

?>