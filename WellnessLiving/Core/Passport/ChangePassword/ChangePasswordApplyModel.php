<?php

namespace WellnessLiving\Core\Passport\ChangePassword;

use WellnessLiving\WlModelAbstract;

/**
 * Point to finish password change procedure.
 *
 * It advance post {@link ChangePasswordBeginModel} model.
 * Set into {@link ChangePasswordBeginModel::$url_reset} field URL to page
 * where you go to get new password from user.
 * It will send to user mail with "reset password" link.
 *
 * When user follows to your page, get <tt>text_mail</tt> and <tt>text_code</tt> from URL.
 *
 * Post this model to set a password for user.
 *
 * Use <tt>text_mail</tt> as value for {@link ChangePasswordApplyModel::$text_login} and
 * {@link ChangePasswordApplyModel::$text_mail},
 * <tt>text_code</tt> - for {@link ChangePasswordApplyModel::$text_code}.
 *
 */
class ChangePasswordApplyModel extends WlModelAbstract
{
  /**
   * Verification code.
   *
   * <b>Required!</b>
   *
   * Get it from link to "password reset" page.
   *
   * @post get
   * @var string
   */
  public $text_code = null;

  /**
   * User's login.
   *
   * <b>Required!</b>
   *
   * Get it from link to "password reset" page.
   *
   * @post get
   * @var string
   */
  public $text_login = null;

  /**
   * User's email.
   *
   * <b>Required!</b>
   *
   * Get it from link to "password reset" page.
   *
   * @post get
   * @var string
   */
  public $text_mail = null;

  /**
   * New password.
   *
   * <b>Required!</b>
   *
   * @post post
   * @var string
   */
  public $text_password = null;
}