<?php

namespace WellnessLiving\Core\Passport\ChangePassword;

use WellnessLiving\WlModelAbstract;

/**
 * Point to start password change procedure.
 *
 * Post it to send to user "reset password email" mail.
 */
class ChangePasswordBeginModel extends WlModelAbstract
{
  /**
   * Characters to pass captcha test.
   *
   * Specify it only if server requires captcha.
   *
   * @post post
   * @var string
   */
  public $text_captcha = '';

  /**
   * Error code. Empty string if mail is sent successfully.
   *
   * @post result
   * @var string
   */
  public $text_error;

  /**
   * User's email.
   *
   * <b>Required!</b>
   *
   * @post post
   * @var string
   */
  public $text_mail = '';

  /**
   * URL to password reset page. This link will be used in a password reset email.
   *
   * Specify only if you want to send user to a custom password reset page, if empty, URL to default page will be used.
   *
   * @post post
   * @var string
   */
  public $url_reset = '';
}

?>