<?php

namespace WellnessLiving\Wl\Staff\StaffList;

use WellnessLiving\WlModelAbstract;

/**
 * List of available staff members.
 */
class StaffListModel extends WlModelAbstract
{
  /**
   * Keys - staff IDs. Values - sub arrays with fields:
   * <ul><li>string[] <tt>a_pay_rate</tt> List of pay rate ID's applicable for staff.</li>
   * <li>string <tt>k_staff</tt> Staff ID.</li>
   * <li>string <tt>s_name</tt> Staff name.</li>
   * <li>string <tt>s_position</tt> Staff position.</li>
   * <li>string <tt>s_surname</tt> First letter of surname of staff member.</li>
   * <li>string|null <tt>s_surname_full</tt> Whole surname of staff member. <tt>null</tt> if private staff member information is not accessible.</li>
   * <li>string <tt>uid</tt> ID of staff as user.</li></ul>
   *
   * @get result
   * @var array
   */
  public $a_staff = [];

  /**
   * ID of a business to show information for.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;
}

?>