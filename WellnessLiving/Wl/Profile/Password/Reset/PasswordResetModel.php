<?php

namespace WellnessLiving\Wl\Profile\Password\Reset;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves request about password resetting of the user.
 * Reset password or not, accordingly to permissions.
 *
 * @method WlModelRequest post()
 */
class PasswordResetModel extends WlModelAbstract
{
  /**
   * <tt>true</tt> if the password reset attempt was last; <tt>false</tt> otherwise.
   *
   * @post result
   * @var bool
   */
  public $is_last;

  /**
   * Key of business.
   *
   * @post post
   * @var string
   */
  public $k_business;

  /**
   * Key of user which password resetting.
   *
   * @post post
   * @var string
   */
  public $uid;
}

?>