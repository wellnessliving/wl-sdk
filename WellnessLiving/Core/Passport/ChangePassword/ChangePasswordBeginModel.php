<?php

namespace WellnessLiving\Core\Passport\ChangePassword;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Starts the password change procedure for a user.
 *
 * Post this to send the user the "reset password" email.
 *
 * @method WlModelRequest post() Sends to user "password recovery" mail.  Accepts the user's email address and an optional custom reset-page URL, validates the input, optionally checks a CAPTCHA, and sends a password reset email containing a link the user can follow to set a new password using {@link \Core\Passport\ChangePassword\ChangePasswordApplyApi}.
 */
class ChangePasswordBeginModel extends WlModelAbstract
{
  /**
   * The characters to pass captcha test.
   *
   * Specify this only if server requires captcha.
   *
   * @post post
   * @var string
   */
  public $text_captcha = '';

  /**
   * The error code. This will be an empty string if the email has been sent successfully.
   *
   * @post result
   * @var string
   */
  public $text_error;

  /**
   * The user's email. This is a required value.
   *
   * @post post
   * @var string
   */
  public $text_mail = '';

  /**
   * The URL for the password reset page. This link will be used in a password reset email.
   *
   * Specify this only if you want to send the user to a custom password reset page.
   * If empty, the default URL page will be used.
   *
   * @post post
   * @var string
   */
  public $url_reset = '';
}

?>