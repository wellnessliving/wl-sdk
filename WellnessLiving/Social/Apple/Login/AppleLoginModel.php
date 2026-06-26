<?php

namespace WellnessLiving\Social\Apple\Login;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Authorizes a user with Apple.
 *
 * @method WlModelRequest delete() Removes the association between a website client and the Apple account. Invalidates the tokens and associated client authorizations.  Requires the user to be signed in. Accepts the application ID, retrieves the Apple sign-in certificate for that application, and unlinks the Apple account from the current user.
 * @method WlModelRequest post() Signs user in with Apple.  Accepts the application ID, the Apple authorization code, and optional first and last name values. If the user is already signed in, binds the Apple account to their existing account; otherwise, signs them in or creates a new account using the Apple identity.
 */
class AppleLoginModel extends WlModelAbstract
{
  /**
   * The application ID.
   *
   * @delete post
   * @post post
   * @var string
   */
  public $text_application = '';

  /**
   * The authorization code.
   *
   * @post post
   * @var string
   */
  public $text_authorization = '';

  /**
   * User's first name.
   *
   * @post post
   * @var string
   */
  public $text_name_first = '';

  /**
   * User's last name.
   *
   * @post post
   * @var string
   */
  public $text_name_last = '';
}

?>