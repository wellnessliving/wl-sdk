<?php

namespace WellnessLiving\Wl\Member\Group\User;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manages the action of manual member group update, and also allows you to set automatic group update.
 *
 * @method WlModelRequest post() Performs an immediate update of the member group.
 * @method WlModelRequest put() Enables automatic member group update.  When enabled, an instant update is performed and  an update task {@link \Wl\Member\Group\User\UserUpdateTask} is scheduled for the next day.  If disabled, the automatic update task is removed.
 */
class UserUpdateModel extends WlModelAbstract
{
  /**
   * Automatic group update flag.
   *
   * <tt>true</tt> to enable automatic update, <tt>false</tt> to disable.
   *
   * @put post
   * @var bool
   */
  public $is_update;

  /**
   * The business key.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_business = null;

  /**
   * The member group key for which the action needs to be performed.
   *
   * @post post
   * @put post
   * @var string
   */
  public $k_member_group;
}

?>