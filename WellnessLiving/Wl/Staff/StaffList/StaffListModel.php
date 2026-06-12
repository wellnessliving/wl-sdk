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