<?php

namespace WellnessLiving\Wl\Staff\StaffList;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\WlPrivilegeSid;

/**
 * Returns a list of all staff members working for a business.
 */
class StaffListModel extends WlModelAbstract
{
  /**
   * A list of privileges to filter staff members by.
   *
   * This property acts as a filter.
   * Only staff members possessing all the privileges specified in this list will be included in the result.
   * Each element in the array represents a privilege ID, and should be one of {@link WlPrivilegeSid} constants.
   *
   * @get get
   * @var int[]
   */
  public $a_privilege = [];

  /**
   * Information about staff members.
   * Each array index is the staff member keys.
   * Each array element is an array containing the following fields:
   *
   * <dl>
   *   <dt>string[] `a_pay_rate`</dt>
   *   <dd>A list of internal pay rate keys applicable to the staff member.</dd>
   * 
   *   <dt>array `a_staff_service`</dt>
   *   <dd>
   *     A list of all services, provided by the staff member.
   * Each element is an array with structure:
   *     <dl>
   *       <dt>string `k_service`</dt>
   *       <dd>Service key. 
   * 
   *       <dt>string `k_staff_pay`</dt>
   *       <dd>Staff pay key for this service. 
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `html_name`</dt>
   *   <dd>Staff name.</dd>
   * 
   *   <dt>int `i_order`</dt>
   *   <dd>Order for sorting.</dd>
   * 
   *   <dt>bool `is_appointment`</dt>
   *   <dd>Whether this staff provides appointments service.</dd>
   * 
   *   <dt>bool `is_class`</dt>
   *   <dd>Whether this staff provides class service.</dd>
   * 
   *   <dt>bool `is_event`</dt>
   *   <dd>Whether this staff provides events service.</dd>
   * 
   *   <dt>string `k_staff`</dt>
   *   <dd>
   *     The staff key. * deprecated Use `uid_staff` instead. Returned only for backward-compatible applications.
   *   </dd>
   * 
   *   <dt>string `s_name`</dt>
   *   <dd>
   *     The staff member first name. If there are rights, the full first name, if not, then depending on the business settings.
   *   </dd>
   * 
   *   <dt>string `s_position`</dt>
   *   <dd>The staff member position in the organization.</dd>
   * 
   *   <dt>string `s_surname`</dt>
   *   <dd>
   *     The first letter of the staff member surname. If there are rights, the full surname, if not, then depending on the business settings.
   *   </dd>
   * 
   *   <dt>string|null `s_surname_full`</dt>
   *   <dd>
   *     The entire surname of the staff member. This will be `null` if private staff member information isn't accessible.
   *   </dd>
   * 
   *   <dt>string `text_name_full`</dt>
   *   <dd>The full name of the staff member.</dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>
   *     The user key.
   * Each staff member in WellnessLiving can also access the system as a client of their business.
   * This is the key used to represent the staff member as a client.
   * *   </dd>
   * 
   *   <dt>string `uid_staff`</dt>
   *   <dd>The staff member user key. 
   * 
   *   <dt>string `url_image`</dt>
   *   <dd>Url link to user photo, or empty string, if photo is not loaded.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_staff;

  /**
   * Determines that only staff members which the current user has access to should be retrieved.
   *
   *  `true` if only staff members which the current user has access to should be retrieved.
   *  `false` otherwise.
   *
   * @get get
   * @var bool
   */
  public $is_check_staff_access = false;

  /**
   * Whether inactive and removed staff members are available.
   * If `true` inactive and removed staff members are available. `false` otherwise.
   *
   * @get get
   * @var bool
   */
  public $is_staff_inactive = false;

  /**
   * The key of the business to show information for.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';
}

?>