<?php

namespace WellnessLiving\Core\Passport\Login;

use WellnessLiving\WlModelAbstract;

/**
 * Gets the user ID for the current user and a password reset URL.
 */
class InfoModel extends WlModelAbstract
{
  /**
   * The current user’s ID.
   *
   * It is `null` if user is not signed in.
   *
   * @get result
   * @var string|null
   */
  public $uid=null;

  /**
   * A URL that a user can visit to reset their password.
   *
   * It is `null` if it is not set yet.
   *
   * @get result
   * @var string|null
   */
  public $url_password_change = null;
}

?>