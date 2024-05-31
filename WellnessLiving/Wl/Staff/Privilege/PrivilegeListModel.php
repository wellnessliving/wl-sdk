<?php

namespace WellnessLiving\Wl\Staff\Privilege;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\WlPrivilegeSid;

/**
 * Can return list of admin or staff privileges of the current user.
 *
 * Cannot be used to check privileges of another user.
 */
class PrivilegeListModel extends WlModelAbstract
{
  /**
   * List of privileges, if user is administrator.
   *
   * There is no certain list of admin privileges, as they are name-based. If you need to check access to certain place
   *  contact WellnessLiving integration team.
   *
   * @get result
   * @var array
   */
  public $a_privilege_passport = [];

  /**
   * List of privileges, if the given user is a staff member in the give business.
   *
   * @get result
   * @var int[]
   * @see WlPrivilegeSid
   */
  public $a_privilege_staff = [];

  /**
   * Whether this user is a super-administrator because he is a studio staff member.
   *
   * `true`, if this user is a super administrator because he is a studio staff member.
   * Super administrators have all privileges.
   *
   * `false` if this is an ordinary user.
   *
   * @get result
   * @var bool
   */
  public $is_admin = false;

  /**
   * Key of business to get privileges for.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * User key to get privileges for.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>