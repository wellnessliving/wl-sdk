<?php

namespace WellnessLiving\Wl\Member\Group\User;

use WellnessLiving\WlModelAbstract;

/**
 * API to see client's groups and add/remove the client to the group.
 */
class UserGroupModel extends WlModelAbstract
{
  /**
   * All groups to which the specified user belongs.
   *
   * @get result
   * @var string[]
   */
  public $a_group_info = [];

  /**
   * Whether the user is in the quick group or not.
   *
   * @get result
   * @var bool
   */
  public $is_quick_group = false;

  /**
   * Key of the business.
   *
   * @delete get
   * @get get
   * @post get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Member group key. Use special value 'quick' to add/remove the user to/from the quick group.
   *
   * @delete post
   * @post post
   * @var string|null
   */
  public $k_member_group = null;

  /**
   * UID of a user.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $uid_user = '';
}

?>