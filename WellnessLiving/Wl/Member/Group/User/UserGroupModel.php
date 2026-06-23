<?php

namespace WellnessLiving\Wl\Member\Group\User;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API to see client's groups and add/remove the client to the group.
 *
 * @method WlModelRequest delete() Deletes the user from the group.  Removes the specified user from the given member group within the business after verifying access rights and that the group key is valid.
 * @method WlModelRequest get() Gets information about all groups to which the specified user belongs.  Returns the list of member group keys for the given user within the specified business, populating `$a_group_info` with those keys after access validation.
 * @method WlModelRequest post() Adds a user to a group.  Assigns the specified user to the given member group within the business after verifying access rights and that the group key is valid.
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