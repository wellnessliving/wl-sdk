<?php

namespace WellnessLiving\Core\Passport\Login\Enter;

use WellnessLiving\WlModelAbstract;

/**
 * Signs a user in.
 */
class EnterModel extends WlModelAbstract
{
  /**
   * Additional data for user authorization.
   *
   * @post post
   * @var array
   */
  public $json_data = [];

  /**
   * Answer to the captcha if needed.
   *
   * @post post
   * @var string
   */
  public $s_captcha = '';

  /**
   * The user's login.
   *
   * @post post
   * @var string
   */
  public $s_login = '';

  /**
   * A copy of notepad that was used to hash user password.
   *
   * See {@link \Wellnessliving\Core\Passport\Login\Enter\EnterModel::$s_password} for details.
   *
   * @post post
   * @var string
   */
  public $s_notepad = '';

  /**
   * The hash of the user password.
   *
   * Use `Core_Passport_Login_Enter_NotepadModel.hash()` to evaluate password hash.
   *
   * @post post
   * @var string
   */
  public $s_password = '';

  /**
   * Whether and how the user login and password should be remembered.
   *
   * The accepted values are as follows:
   * <ul>
   *   <li>`''` Empty line (default value) if you do not want to remember anything.</li>
   *   <li>`'login'` Remember only user login.</li>
   *   <li>`'password'` Remember user login and password.</li>
   * </ul>
   *
   * @post post
   * @var string
   */
  public $s_remember = '';

  /**
   * Optional URL to get captcha image.
   *
   * This field is filled in a case when a captcha code is required to sign in.
   *
   * @post error
   * @var string
   */
  public $url_captcha;

  /**
   * Optional url for redirection after sign in in web application.
   *
   * @post result
   * @var string
   */
  public $url_redirect;
}

?>