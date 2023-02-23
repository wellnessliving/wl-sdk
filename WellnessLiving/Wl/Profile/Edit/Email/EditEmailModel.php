<?php

namespace WellnessLiving\Wl\Profile\Edit\Email;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that checks if a user's email address is already used or changes a user’s login email address.
 *
 * This endpoint is rate limited. If the rate limit is exceeded, it won't return user information.
 */
class EditEmailModel extends WlModelAbstract
{
  /**
   * Information about the user who occupies the specified email.
   * This will be empty if the email is free or if the rate limit has been reached.
   *
   * @get result
   * @var array
   */
  public $a_user = [];

  /**
   * If `true`, then the number of requests has exceeded the rate limit. Otherwise, this will be `false`.
   *
   * @get result
   * @var bool
   */
  public $is_limit = false;

  /**
   * If `true`, then the specified email is in use. Otherwise, this will be `false`.
   *
   * @get result
   * @var bool
   */
  public $is_use = false;

  /**
   * The business key where the check must be performed.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * The email address to be checked.
   *
   * @get get
   * @var string
   */
  public $text_mail = '';

  /**
   * The key of user who has the specified email.
   * This will be `0` if the email is free or if the rate limit has been reached.
   *
   * @get result
   * @var string
   */
  public $uid_result = '0';

  /**
   * The key of user whose email will be edited.
   * This will be `0` in the case of a new user creation.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid_want = '0';
}

?>