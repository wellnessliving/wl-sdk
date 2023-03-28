<?php

namespace WellnessLiving\Wl\Staff\StaffList;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that returns a list of all staff members working for a business.
 */
class StaffListModel extends WlModelAbstract
{
  /**
   * Information about staff members.
   * Each array index is the staff member’s internal ID number in WellnessLiving.
   * Each array element is an array containing the following fields:
   * <ul><li>string[] `a_pay_rate` A list of internal pay rate IDs applicable to the staff member.</li>
   * <li>string `k_staff` A staff member ID in WellnessLiving (this should be the same as the `a_staff` array index).</li>
   * <li>string `s_name` The staff member’s first name</li>
   * <li>string `s_position` The staff member’s position in the organization.</li>
   * <li>string `s_surname` The first letter of the staff member’s surname.</li>
   * <li>string|null `s_surname_full` The entire surname of the staff member. This will be `null` if private staff member information isn't accessible.</li>
   * <li>string `uid` The user ID. Each staff member in WellnessLiving can also access the system as a client of their business. This is the ID number used to represent the staff member as a client.</li></ul>
   *
   * @get result
   * @var array
   */
  public $a_staff = [];

  /**
   * The key of the business to show information for.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;
}

?>