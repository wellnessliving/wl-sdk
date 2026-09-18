<?php

namespace WellnessLiving\Wl\Schedule\ScheduleList\StaffApp\Staff;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Information about staff members which may be shown on business schedule.
 *
 * @method WlModelRequest get() Gets information about staff members of business.  Returns the staff members configured to appear on the business schedule, identified by  `uid_staff`. For applications in the `APPS_USE_OLD_K_STAFF` allow-list, the legacy `k_staff`  list is also returned for backward compatibility.
 */
class ScheduleListStaffModel extends WlModelAbstract
{
  /**
 * IDs of staff members which must be represented of business schedule.
 *
 * Returned only for applications in the `APPS_USE_OLD_K_STAFF` allow-list.
 *
 * @get result
 * @var string[]
 * @deprecated Use {@link ScheduleListStaffModel::$a_uid_staff} instead.
 */
  public $a_staff;

  /**
 * IDs of staff members which must be represented of business schedule. Primary keys in the `passport_login` table.
 *
 * @get result
 * @var string[]
 */
  public $a_uid_staff;

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