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
   * Each array index is the staff member keys.
   * Each array element is an array containing the following fields:
   * <dl>
   *   <dt>
   *     string[] <var>a_pay_rate</var>
   *   </dt>
   *   <dd>
   *     A list of internal pay rate keys applicable to the staff member.
   *   </dd>
   *   <dt>
   *     string <var>html_name</var>
   *   </dt>
   *   <dd>
   *     Staff name.
   *   </dd>
   *   <dt>
   *     int <var>i_order</var>
   *   </dt>
   *   <dd>
   *     Order for sorting.
   *   </dd>
   *   <dt>
   *     string <var>k_staff</var>
   *   </dt>
   *   <dd>
   *     Staff key; primary key in {@link \RsStaffSql} table.
   *   </dd>
   *   <dt>
   *     string <var>s_name</var>
   *   </dt>
   *   <dd>
   *     The staff member first name.
   *   </dd>
   *   <dt>
   *     string <var>s_position</var>
   *   </dt>
   *   <dd>
   *     The staff member position in the organization.
   *   </dd>
   *   <dt>
   *     string <var>s_surname</var>
   *   </dt>
   *   <dd>
   *     The first letter of the staff member surname.
   *   </dd>
   *   <dt>
   *     string|null <var>s_surname_full</var>
   *   </dt>
   *   <dd>
   *     The entire surname of the staff member. This will be `null` if private staff member information isn't accessible.
   *   </dd>
   *   <dt>
   *     string <var>uid</var>
   *   </dt>
   *   <dd>
   *     The user key.
   *     Each staff member in WellnessLiving can also access the system as a client of their business.
   *     This is the key used to represent the staff member as a client.
   *   </dd>
   *   <dt>
   *     string <var>url_image</var>
   *   </dt>
   *   <dd>
   *     Url link to user photo, or empty string, if photo is not loaded.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_staff;

  /**
   * The key of the business to show information for.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';
}

?>