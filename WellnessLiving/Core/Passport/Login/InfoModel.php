<?php

namespace WellnessLiving\Core\Passport\Login;

use WellnessLiving\WlModelAbstract;

/**
 * Gets the user ID for the current user and a password reset URL.
 */
class InfoModel extends WlModelAbstract
{
  /**
   * The current user key.
   *
   * It is `null` if user is not signed in.
   *
   * @get result
   * @var string|null
   */
  public $uid;

  /**
   * A URL that a user can visit to reset their password.
   *
   * @get result
   * @var string
   */
  public $url_password_change;

  /**
   * URL to register page.
   *
   * @get result
   * @var string
   */
  public $url_register;
}

?>