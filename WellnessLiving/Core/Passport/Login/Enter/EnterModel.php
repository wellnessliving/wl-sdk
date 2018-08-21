<?php

namespace WellnessLiving\Core\Passport\Login\Enter;

use WellnessLiving\WlModelAbstract;

/**
 * Signs user in.
 */
class EnterModel extends WlModelAbstract
{
  /**
   * Captcha (if needed).
   *
   * <tt>null</tt> if not needed.
   *
   * @post post
   * @var string|null
   */
  public $s_captcha=null;

  /**
   * User login.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post post
   * @var string|null
   */
  public $s_login=null;

  /**
   * Copy of notepad that was used to hash user password.
   *
   * See {@link \WellnessLiving\Core\Passport\Login\Enter\EnterModel::$s_password} for details.
   *
   * @post post
   * @var string|null
   */
  public $s_notepad=null;

  /**
   * User password.
   *
   * <tt>sha1($s_notepad.sha1($s_password))</tt> hash should be passed here (40 hexadecimal digits, all lowercase).
   *
   * <tt>$s_password</tt> is user password.
   *
   * <tt>$s_notepad</tt> is notepad returned by {@link \WellnessLiving\Core\Passport\Login\Enter\NotepadModel::$s_notepad}.
   *
   * @post post
   * @var string|null
   */
  public $s_password=null;

  /**
   * Whether and how user login and password should be remembered.
   *
   * Allowed values:<ul>
   * <li><tt>''</tt> Empty line (default value) if you do not want to remember anything.</li>
   * <li><tt>'login'</tt> To remember only user login.</li>
   * <li><tt>'password'</tt> To remember user login and password.</li>
   * </ul>
   *
   * @post post
   * @var string
   */
  public $s_remember='';
}

?>