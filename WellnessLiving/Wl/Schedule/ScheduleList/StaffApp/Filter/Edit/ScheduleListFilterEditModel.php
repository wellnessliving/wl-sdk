<?php

namespace WellnessLiving\Wl\Schedule\ScheduleList\StaffApp\Filter\Edit;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlServiceSid;

/**
 * Entry point to create/change saved schedule filters.
 *
 * @method WlModelRequest delete() Deletes schedule filter.  Validates that the given filter exists and that the current user is allowed to change it,  either because the user created the filter or has staff-edit privilege for the business,  then removes the filter inside a transaction.
 * @method WlModelRequest post() Saves new configurations for schedule filter.  Validates the filter title and, for an existing filter, that the current user is allowed to  change it. Compares the submitted class, event, location, resource, staff, and service type  selections against the full lists available to the user in this business, builds the  corresponding schedule config data, and saves it inside a transaction. Also updates the  filter's default flag for the user and logs the change.
 */
class ScheduleListFilterEditModel extends WlModelAbstract
{
  /**
   * Filter configuration:
   *
   * <dl>
   *   <dt>string[] `a_class`</dt>
   *   <dd>List of classes which must be selected in filter. Primary keys in  table.</dd>
   * 
   *   <dt>string[] `a_event`</dt>
   *   <dd>List of events which must be selected in filter. Primary keys in  table.</dd>
   * 
   *   <dt>string[] `a_location`</dt>
   *   <dd>List of locations which must be selected in filter. Primary keys in  table.</dd>
   * 
   *   <dt>string[] `a_resource`</dt>
   *   <dd>List of assets which must be selected in filter. Primary keys in  table.</dd>
   * 
   *   <dt>string[] `a_service`</dt>
   *   <dd>
   *     List of appointment services which must be selected in filter. Primary keys in  table.
   *   </dd>
   * 
   *   <dt>string[] `a_staff`</dt>
   *   <dd>List of staff members which must be selected in filter. Primary keys in  table.</dd>
   * 
   *   <dt>int[] `a_type`</dt>
   *   <dd>List of service types which must be selected in filter. Constants of {@link WlServiceSid} class.</dd>
   * 
   *   <dt>bool `is_staff_all`</dt>
   *   <dd>
   *     <tt>true</tt> to show all staff members.
   * <tt>false</tt> to show only staff members from <var>a_staff</var> field.
   *   </dd>
   * 
   *   <dt>bool `is_staff_available`</dt>
   *   <dd><tt>true</tt> to show only available staff members; <tt>false</tt> otherwise.</dd>
   * </dl>
   * @post post
   * @var array
   */
  public $a_config = [];

  /**
   * <tt>true</tt> - filter must be default; <tt>false</tt> - otherwise.
   *
   * @post post
   * @var bool
   */
  public $is_default = false;

  /**
   * <tt>true</tt> - filter must be public; <tt>false</tt> - otherwise.
   *
   * @post post
   * @var bool
   */
  public $is_public = false;

  /**
   * JSON version of {@link ScheduleListFilterEditModel::$a_config}.
   *
   * @post post
   * @var string
   */
  public $json_config = '';

  /**
   * Business key.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_business = null;

  /**
   * ID of saved filter.
   * <tt>0</tt> to create new filter.
   *
   * @delete get
   * @post get
   * @var string
   */
  public $k_schedule_config = '0';

  /**
   * Filter title.
   *
   * @post post
   * @var string
   */
  public $text_title = '';

  /**
   * User key.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $uid = null;
}

?>