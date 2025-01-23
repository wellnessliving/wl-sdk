<?php

namespace WellnessLiving\Wl\Profile\Edit;

use WellnessLiving\WlModelAbstract;

/**
 * Model to change user's password.
 */
class EditPasswordModel extends WlModelAbstract
{
  /**
   * Checks if the current password is required or not to update the password.
   *
   * @post post
   * @var bool
   */
  public $is_old_password_required = true;

  /**
   * The key ID of business where actions take place.
   *
   * Business is necessary for mail sending only.
   *
   * @post post
   * @var string
   */
  public $k_business = '0';

  /**
   * The confirmation of new password.
   *
   * @post post
   * @var string
   */
  public $s_password_confirm = '';

  /**
   * The new password.
   *
   * @post post
   * @var string
   */
  public $s_password_new = '';

  /**
   * The old password.
   *
   * @post post
   * @var string
   */
  public $s_password_old = '';

  /**
   * The user key.
   *
   * @post post
   * @var string
   */
  public $uid = '0';
}

?>