<?php

namespace WellnessLiving\Wl\Staff\StaffList;

use WellnessLiving\WlModelAbstract;

/**
 * Returns a list of all staff members working for a business
 */
class StaffListModel extends WlModelAbstract
{
  /**
   * Information about staff members.
   * Each array index is the staff member’s internal ID number in WellnessLiving.
   * Each array element is an array containing the following fields:
   * <ul><li>string[] <tt>a_pay_rate</tt>A list of internal pay rate IDs applicable to the staff member.</li>
   * <li>string <tt>k_staff</tt>A staff member ID in WellnessLiving (this should be the same as the a_staff array index) </li>
   * <li>string <tt>s_name</tt>The staff member’s first name</li>
   * <li>string <tt>s_position</tt>The staff member’s position in the organization.</li>
   * <li>string <tt>s_surname</tt>The first letter of the staff member’s surname.</li>
   * <li>string|null <tt>s_surname_full</tt> Whole surname of staff member. <tt>null</tt> if private staff member information is not accessible.</li>
   * <li>string <tt>uid</tt>The user ID. Each staff member in WellnessLiving can also access the system as a client of their business. This is the ID number used to represent the staff member as a client.</li></ul>
   *
   * @get result
   * @var array
   */
  public $a_staff = [];

  /**
   * The key of the business to show information for.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;
}

?>