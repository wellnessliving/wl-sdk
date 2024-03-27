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
   *     array <var>a_staff_service</var>
   *   </dt>
   *   <dd>
   *     A list of all services, provided by the staff member.
   *     Each element is an array with structure: <dl>
   *       <dt>
   *         string <var>k_service</var>
   *       </dt>
   *       <dd>
   *
   *       </dd>
   *       <dt>
   *         string <var>k_staff_pay</var>
   *       </dt>
   *       <dd>
   *
   *       </dd>
   *     </dl>
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
   *     bool <var>is_appointment</var>
   *   </dt>
   *   <dd>
   *     Whether this staff provides appointments service.
   *   </dd>
   *   <dt>
   *     bool <var>is_class</var>
   *   </dt>
   *   <dd>
   *     Whether this staff provides class service.
   *   </dd>
   *   <dt>
   *     bool <var>is_event</var>
   *   </dt>
   *   <dd>
   *     Whether this staff provides events service.
   *   </dd>
   *   <dt>
   *     string <var>k_staff</var>
   *   </dt>
   *   <dd>
   *     The staff key.
   *   </dd>
   *   <dt>
   *     string <var>s_name</var>
   *   </dt>
   *   <dd>
   *     The staff member first name. If there are rights, the full first name, if not, then depending on the business settings.
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
   *     The first letter of the staff member surname. If there are rights, the full surname, if not, then depending on the business settings.
   *   </dd>
   *   <dt>
   *     string|null <var>s_surname_full</var>
   *   </dt>
   *   <dd>
   *     The entire surname of the staff member. This will be `null` if private staff member information isn't accessible.
   *   </dd>
   *   <dt>
   *     string <var>text_name_full</var>
   *   </dt>
   *   <dd>
   *     The full name of the staff member.
   *   </dd>
   *   <dt>
   *     string <var>uid</var>
   *   </dt>
   *   <dd>
   *     The user key.
   *     Each staff member in WellnessLiving can also access the system as a client of their business.
   *     This is the key used to represent the staff member as a client.
   *
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