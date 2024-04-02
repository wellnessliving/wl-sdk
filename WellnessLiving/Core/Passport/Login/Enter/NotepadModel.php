<?php

namespace WellnessLiving\Core\Passport\Login\Enter;

use WellnessLiving\Sha3;
use WellnessLiving\WlModelAbstract;

/**
 * Retrieves the notepad value from the server that is used to sign someone in to the SDK.
 */
class NotepadModel extends WlModelAbstract
{
  /**
   * The hash type.
   *
   * @get result
   * @var string
   */
  public $s_hash;

  /**
   * The notepad value, which is used to hash the user's password. The password length is
   * {@link \WellnessLiving\Core\Passport\Login\Enter\NotepadModel::NONCE_LENGTH} characters.
   *
   * @get result
   * @var string
   */
  public $s_notepad;

  /**
   * The session type to store the notepad in.
   *
   * This will be an empty string for a temporary session. Otherwise, you can use `system` for a system session.
   *
   * @get get
   * @var string
   */
  public $s_type = '';

  /**
   * Evaluates the hash based on the notepad and the plaintext user password.
   *
   * @param string $s_password The plaintext user password.
   * @return string The password hash. This depends on the hash, the salt, the type of the hash, and the plaintext user password.
   */
  public function hash($s_password)
  {
    // Unlike the server side, only HEX hash is supported in JS.
    // For this reason, the API expects a HEX string and not a raw hash.
    return Sha3::hash($this->s_notepad.NotepadModel::passwordHash($s_password)/*Important! See comment above.*/,512,false);
  }

  /**
   * Evaluates the initial hash based on the notepad and the plaintext user password (the value of the hash stored in the database).
   *
   * This method has a server-side counterpart.
   *
   * @param string $s_password The plaintext user password.
   * @return string The hashed user password.
   */
  public static function passwordHash($s_password)
  {
    static $a_delimiter=[
      'r',
      '4S',
      'zqX',
      'zqiOK',
      'TLVS75V',
      'Ue5aLaIIG75',
      'uODJYM2JsCX4G',
      'kt58wZfHHGQkHW4QN',
      'Lh9Fl5989crMU4E7P6E'
    ];

    // Unlike the server side, only HEX hash is supported in JS.
    // For this reason, the API expects a HEX string and not a raw hash.
    return Sha3::hash(implode($s_password,$a_delimiter).$s_password/*Important! See comment above.*/,512,false);
  }
}

?>