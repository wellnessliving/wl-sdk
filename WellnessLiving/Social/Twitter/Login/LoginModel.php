<?php

namespace WellnessLiving\Social\Twitter\Login;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * A class is for authorizing user with twitter.
 *
 * @method WlModelRequest delete() Deletes link to Twitter profile.
 * @method WlModelRequest get() Checks if user's profile is linked to Twitter.
 * @method WlModelRequest post() Authorizes user with twitter.
 */
class LoginModel extends WlModelAbstract
{
  /**
   * User ID in Twitter.
   *
   * @delete get
   * @get result
   * @post get
   * @var string
   */
  public $i_twitter = '';

  /**
   * <tt>true</tt> - profile is linked to Twitter; <tt>false</tt> - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_exists;

  /**
   * Twitter secret key.
   *
   * @post post
   * @var string
   */
  public $s_secret = '';

  /**
   * Twitter token.
   *
   * @post post
   * @var string
   */
  public $s_token = '';

  /**
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>