<?php

namespace WellnessLiving\Core\Passport\Login\Enter;

use WellnessLiving\WlModelAbstract;

/**
 * Signs a user in.
 */
class EnterModel extends WlModelAbstract
{
  /**
   * Answer to the captcha if needed. (if needed).
   *
   * It is `null` if not needed.
   *
   * @post post
   * @var string|null
   */
  public $s_captcha=null;

  /**
   * The user's login.
   *
   * It is `null` if not set yet.
   *
   * @post post
   * @var string|null
   */
  public $s_login=null;

  /**
   * A copy of notepad that was used to hash user password.
   *
   * See {@link \WellnessLiving\Core\Passport\Login\Enter\EnterModel::$s_password} for details.
   *
   * @post post
   * @var string|null
   */
  public $s_notepad=null;

  /**
   * The hash of the user’s password.
   *
   * Use {@link \WellnessLiving\Core\Passport\Login\Enter\NotepadModel::hash()} to evaluate password hash.
   *
   * @post post
   * @var string|null
   */
  public $s_password=null;

  /**
   * Whether and how the user’s login and password should be remembered.
   *
   * The accepted values are as follows:
   * <ul>
   * <li><tt>''</tt> Empty line (default value) if you do not want to remember anything.</li>
   * <li><tt>'login'</tt> Remember only user login.</li>
   * <li><tt>'password'</tt> Remember user login and password.</li>
   * </ul>
   *
   * @post post
   * @var string
   */
  public $s_remember='';
}

?>