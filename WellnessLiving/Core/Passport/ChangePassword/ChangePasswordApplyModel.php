<?php

namespace WellnessLiving\Core\Passport\ChangePassword;

use WellnessLiving\WlModelAbstract;

/**
 * Finishes the password change procedure for a user.
 *
 * This endpoint advances the {@link \WellnessLiving\Core\Passport\ChangePassword\ChangePasswordBeginModel} endpoint.
 * Set your desired password in the {@link \WellnessLiving\Core\Passport\ChangePassword\ChangePasswordBeginModel::$url_reset}
 * field, where you use the "reset password" link via email to get the user's new password for this endpoint.
 *
 * When the user goes to your page, get <tt>text_mail</tt> and <tt>text_code</tt> from the URL, then post this model to set a password for user.
 *
 * Use <tt>text_mail</tt> as the value for {@link \WellnessLiving\Core\Passport\ChangePassword\ChangePasswordApplyModel::$text_login} and
 * {@link \WellnessLiving\Core\Passport\ChangePassword\ChangePasswordApplyModel::$text_mail},
 * and <tt>text_code</tt> as the value for {@link \WellnessLiving\Core\Passport\ChangePassword\ChangePasswordApplyModel::$text_code}.
 */
class ChangePasswordApplyModel extends WlModelAbstract
{
  /**
   * The verification code, which can be obtained from the "reset password" email link. This is a required value.
   *
   * @post get
   * @var string
   */
  public $text_code = '';

  /**
   * The user's login, which can be obtained from the "reset password" email link. This is a required value.
   *
   * @post get
   * @var string
   */
  public $text_login = '';

  /**
   * The user's email address, which can be obtained from the "reset password" email link. This is a required value.
   *
   * @post get
   * @var string
   */
  public $text_mail = '';

  /**
   * The user's new password. This is a required value.
   *
   * @post post
   * @var string
   */
  public $text_password = '';
}

?>