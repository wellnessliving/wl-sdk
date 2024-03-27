<?php

namespace WellnessLiving\Custom\Core\Passport\Login\Enter;

use WellnessLiving\Sha3;
use WellnessLiving\WlModelAbstract;

/**
 * Class aimed to customise class {@link \WellnessLiving\Core\Passport\Login\Enter\NotepadModel}.
 *
 * @property string $s_notepad
 */
class NotepadModel extends WlModelAbstract
{
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
    return Sha3::hash($this->s_notepad.static::passwordHash($s_password)/*Important! See comment above.*/,512,false);
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