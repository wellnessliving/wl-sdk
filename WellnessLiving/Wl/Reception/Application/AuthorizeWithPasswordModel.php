<?php

namespace WellnessLiving\Wl\Reception\Application;

use WellnessLiving\Core\Passport\Login\Enter\EnterModel;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows authorization of the user with email and password.
 * Signs out user right away after authorization because we need session without user during Self Check In.
 * Is used only to check email and password properly.
 *
 * @method WlModelRequest post()
 */
class AuthorizeWithPasswordModel extends WlModelAbstract
{
  /**
   * Additional data for user authorization.
   *
   * @post post
   * @var string
   */
  public $json_data = '[]';

  /**
   * Key of the business, where Self Check In application is run.
   *
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Key of the location, where Self Check In application is run.
   *
   * @post get
   * @var string
   */
  public $k_location = '';

  /**
   * The answer to the captcha, if needed.
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
   * A copy of the notepad that was used to hash the user password.
   *
   * See {@link EnterModel::$s_password} for details.
   *
   * @post post
   * @var string
   */
  public $s_notepad = '';

  /**
   * The hash of the user password.
   *
   * Use `Core_Passport_Login_Enter_NotepadModel.hash()` to evaluate the password hash.
   *
   * @post post
   * @var string
   */
  public $s_password = '';

  /**
   * Determines whether the user login and password should be remembered, and how they should be remembered.
   *
   * The accepted values are:
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
   * Key of the Check In application.
   *
   * @post get
   * @var string
   */
  public $s_secret = '';

  /**
   * Key of the user, which was signed in.
   *
   * Will be left empty, if user was not able to sign in.
   *
   * @post result
   * @var string
   */
  public $uid = '';

  /**
   * Optional URL to get captcha image.
   *
   * This field is filled in a case when a captcha code is required to sign in.
   *
   * @post error
   * @var string
   */
  public $url_captcha = null;

  /**
   * An optional URL for redirection after the user has signed in to the web application.
   *
   * @post result
   * @var string
   */
  public $url_redirect = null;

  /**
   * Url of previous page if the user was redirected to login.
   *
   * @post post
   * @var string
   */
  public $url_return = '';
}

?>