<?php

namespace WellnessLiving\Wl\Profile\Edit\Email;

use WellnessLiving\WlModelAbstract;

/**
 * Checks a user’s email to either see if it’s in use or change a user’s login email address.
 *
 * This endpoint may be limited in number of uses. If the limit is exceeded, it will not return user information.
 */
class EditEmailModel extends WlModelAbstract
{
  /**
   * Information about the user who occupies the specified email.
   * This will be empty if the email is free or if number of requests is exhausted.
   *
   * @get result
   * @var array
   */
  public $a_user = [];

  /**
   * If `true` then the number of requests has exceeded the limit.
   *
   * @get result
   * @var bool
   */
  public $is_limit = false;

  /**
   * If `true` then the specified email is in use.
   *
   * @get result
   * @var bool
   */
  public $is_use = false;

  /**
   * The business key where check must be performed.
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
   * It will be `0` if the email is free or if quantity of requests is exhausted.
   *
   * @get result
   * @var string
   */
  public $uid_result = '0';

  /**
   * The key of user whose email we try to edit.
   * It will be `0` in the case of new user creation.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid_want = '0';
}

?>