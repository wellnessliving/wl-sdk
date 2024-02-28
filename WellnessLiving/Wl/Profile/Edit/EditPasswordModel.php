<?php

namespace Wl\Profile\Edit;

use WellnessLiving\WlModelAbstract;

/**
 * Model to change user's password.
 */
class EditPasswordModel extends WlModelAbstract
{
  /**
   * The key ID of business where actions take place.
   * Primary key in {@link \RsBusinessSql} table.
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