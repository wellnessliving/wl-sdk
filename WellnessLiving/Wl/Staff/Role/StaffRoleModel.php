<?php

namespace WellnessLiving\Wl\Staff\Role;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlPrivilegeRoleSid;

/**
 * Staff Role API.
 *
 * @method WlModelRequest get() Gets list of staff roles.
 */
class StaffRoleModel extends WlModelAbstract
{
  /**
   * List of staff roles.
   *
   * <dl>
   *   <dt>int `id_privilege_role`</dt>
   *   <dd>ID of privilege role. Constant from {@link WlPrivilegeRoleSid}.</dd>
   * 
   *   <dt>string `k_business_role`</dt>
   *   <dd>Key of the business role.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Title of staff role.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_staff_role = [];

  /**
   * Whether current user has privilege to change staff roles.
   *
   * @get result
   * @var bool
   */
  public $can_privilege = false;

  /**
   * Whether need return all roles in the business, else if you need return only available roles for current user.
   *
   * @get get
   * @var bool
   */
  public $is_all = true;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>