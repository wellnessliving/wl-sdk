<?php

namespace WellnessLiving\Core\Passport\Login;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Gets the user ID for the current user and a password reset URL.
 *
 * @method WlModelRequest get() Returns information about user that is currently signed in.  Used to bootstrap the login widget: determines whether a session is active and provides the URLs needed to redirect an unauthenticated visitor to the password reset or registration flows without hard-coding those URLs on the frontend.
 */
class InfoModel extends WlModelAbstract
{
  /**
   * The current user key.
   *
   * This will be `null` if the user isn't signed in.
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
   * The URL to the registration page.
   *
   * @get result
   * @var string
   */
  public $url_register;
}

?>