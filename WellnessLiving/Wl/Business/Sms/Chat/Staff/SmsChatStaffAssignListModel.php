<?php

namespace WellnessLiving\Wl\Business\Sms\Chat\Staff;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Staff available to assigned list, for the sms chat clients.
 *
 * @method WlModelRequest get() Gets list of staff available to assigned for sms chat clients.
 */
class SmsChatStaffAssignListModel extends WlModelAbstract
{
  /**
   * List of staff assign to chat of client.
   * Each element contains the following fields:
   *
   * <dl>
   *   <dt>string `text_full_name`</dt>
   *   <dd>Staff member first and last name.</dd>
   * 
   *   <dt>string `uid_staff`</dt>
   *   <dd>Staff UID.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_staff_assign = [];

  /**
   * Are there any chats that are unassigned to staff members.
   *
   * @get result
   * @var bool
   */
  public $has_unassigned = false;

  /**
   * Status of the dialog.
   *
   * @get get
   * @var int
   */
  public $id_dialog_status = 1;

  /**
   * Business key.
   *
   * `null` if not specified, will throw an exception.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * The key of the current staff member if there are chats assigned to him, `null` otherwise.
   *
   * @get result
   * @var string|null
   */
  public $uid_staff_assigned_self = null;
}

?>