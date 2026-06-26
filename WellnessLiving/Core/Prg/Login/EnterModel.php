<?php

namespace WellnessLiving\Core\Prg\Login;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Signs a programmer in.
 *
 * @method WlModelRequest post() Signs programmer in.
 */
class EnterModel extends WlModelAbstract
{
  /**
   * Programmer login.
   *
   * @post post
   * @var string
   */
  public $s_login = '';

  /**
   * Notepad that is used to hash user password.
   *
   * See {@link \WellnessLiving\Core\Passport\Login\Enter\EnterModel::$s_password} about hashing of user password.
   *
   * @post post
   * @var string
   */
  public $s_notepad = '';

  /**
   * User password (evaluated with <tt>Core_Passport_Login_Enter_NotepadModel.hash()</tt> function on javascript).
   *
   * @post post
   * @var string
   */
  public $s_password = '';
}

?>