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
  public $text_captcha = null;

  /**
   * User's email.
   *
   * <b>Required!</b>
   *
   * @post post
   * @var string
   */
  public $text_mail = null;

  /**
   * URL to password reset page. This link will be used in a password reset email.
   *
   * Specify only if you want to send user to a custom password reset page.
   *
   * @post post
   * @var string
   */
  public $url_reset = null;
}

?>