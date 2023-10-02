<?php

namespace WellnessLiving\Core\Passport\Login\Enter;

/**
 * Retrieve the notepad value from the server which is used to log someone in to the SDK.
 */
class NotepadModel extends \WellnessLiving\Custom\Core\Passport\Login\Enter\NotepadModel
{
  /**
   * Type of the hash.
   *
   * @get result
   * @var string
   */
  public $s_hash;

  /**
   * The notepad value, it is used to hash user's the password. Length is {@link \WellnessLiving\Core\Passport\Login\Enter\NotepadModel::NONCE_LENGTH} characters.
   *
   * @get result
   * @var string
   */
  public $s_notepad;

  /**
   * Type of session to store notepad in.
   *
   * Allowed values: <tt>system</tt> to store in system session (this is used to sign in at programmer pages).
   * Empty string to store in temporary session.
   *
   * @get get
   * @var string
   */
  public $s_type = '';
}

?>