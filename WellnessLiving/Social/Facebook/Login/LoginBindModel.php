<?php

namespace WellnessLiving\Social\Facebook\Login;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Binding of user's profile to Facebook.
 *
 * @method WlModelRequest delete() Deletes link to Facebook profile.
 * @method WlModelRequest get() Checks if user's profile is bound to Facebook.
 * @method WlModelRequest post() Binds user's profile to Facebook.
 */
class LoginBindModel extends WlModelAbstract
{
  /**
   * User ID in Facebook.
   *
   * @delete get
   * @get result
   * @var string
   */
  public $i_facebook = '';

  /**
   * <tt>true</tt> - profile is bound to Facebook; <tt>false</tt> - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_exists;

  /**
   * Facebook token.
   *
   * @post post
   * @var string
   */
  public $s_token = '';

  /**
   * User key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>