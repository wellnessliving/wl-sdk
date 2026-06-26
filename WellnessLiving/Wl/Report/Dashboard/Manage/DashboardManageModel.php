<?php

namespace WellnessLiving\Wl\Report\Dashboard\Manage;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Report\WlReportPageSid;
use WellnessLiving\Wl\Report\WlReportSid;
use WellnessLiving\Wl\WlPrivilegeRoleSid;

/**
 * Api for manage dashboard.
 *
 * @method WlModelRequest delete() Deletes dashboard.
 * @method WlModelRequest get() Gets dashboard contents.
 * @method WlModelRequest post() Creates a dashboard.
 * @method WlModelRequest put() Updates a dashboard.
 */
class DashboardManageModel extends WlModelAbstract
{
  /**
   * Selected staff roles of the dashboard.
   *
   * <tt>null</tt> if list of staff roles doesn't need to be updated.
   *
   * <dl>
   *   <dt>int `id_privilege_role`</dt>
   *   <dd>ID of privilege role. Constant from {@link WlPrivilegeRoleSid}.</dd>
   * 
   *   <dt>string `k_business_role`</dt>
   *   <dd>Key of the business role.</dd>
   * </dl>
   * @get result
   * @post post
   * @put post
   * @var array[]|null
   */
  public $a_staff_role;

  /**
   * List of widgets that are displayed on the dashboard.
   *
   * <tt>null</tt> if list of widgets doesn't need to be updated.
   *
   * Structure of each item: 
   *
   * <dl>
   *   <dt>int `i_report_widget`</dt>
   *   <dd>
   *     Widget content identifier. Depending on <var>id_report_widget</var> may be one of {@link WlReportSid},
   *  {@link WlReportPageSid}, or primary key in {@link \RsReportSaveSql} table.
   *   </dd>
   * 
   *   <dt>int `i_sort`</dt>
   *   <dd>Widget order on the dashboard.</dd>
   * 
   *   <dt>int `id_report_widget`</dt>
   *   <dd>Widget type identifier.</dd>
   * </dl>
   * @get result
   * @post post
   * @put post
   * @var int[][]|null
   * @see WlReportPageSid
   *
   * @see WlReportSid
   */
  public $a_widget_list;

  /**
   * Whether user can change share mode.
   *
   * @get result
   * @var bool
   */
  public $can_share;

  /**
   * Dashboard editing mode.
   *
   * @get get
   * @post get
   * @put get
   * @var int
   */
  public $id_mode;

  /**
   * Dashboard sharing mode.
   *
   * @get result
   * @post post
   * @put post
   * @var int
   */
  public $id_share;

  /**
   * Business key.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_business = '';

  /**
   * Dashboard key to read or update.
   *
   * <tt>null</tt> if API is called to create a new dashboard.
   *
   * @delete get
   * @get get
   * @post get,result
   * @put get,result
   * @var string|null
   */
  public $k_report_dashboard = null;

  /**
   * Name of dashboard owner.
   *
   * @get result
   * @var string
   */
  public $text_owner_name;

  /**
   * Dashboard title.
   *
   * <tt>null</tt> for read requests.
   *
   * @get result
   * @post post
   * @put post
   * @var string|null
   */
  public $text_title;

  /**
   * Key of the currently logged-in user.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $uid;

  /**
   * The URL where the user photo can be retrieved.
   *
   * @get result
   * @var string
   */
  public $url_owner_photo;
}

?>