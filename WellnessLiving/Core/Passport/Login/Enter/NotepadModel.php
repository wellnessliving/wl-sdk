<?php

namespace WellnessLiving\Core\Passport\Login\Enter;

use WellnessLiving\WlModelAbstract;

/**
 * Generates notepad for user sign in form.
 */
class NotepadModel extends WlModelAbstract
{
  /**
   * Type of the hash.
   *
   * @get result
   * @var string|null
   */
  public $s_hash=null;

  /**
   * Value of notepad to hash user password. 20 lowercase hexadecimal digits.
   *
   * <tt>null</tt> if notepad is not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $s_notepad=null;

  /**
   * Evaluates hash based on notepad and plain user password.
   *
   * @param string $s_password Plain user password.
   * @return string Password hash, depends on hash, solt, type of the hash and plain user password.
   */
  public function hash($s_password)
  {
    $s_hash=null;
    $s_sha1=null;
    $s_sha3=null;

    if($this->s_hash==='sha3'||$this->s_hash==='sha1,sha3')
    {
      $s_hash=NotepadModel::passwordHash($s_password);
      if($this->s_hash==='sha3')
        $s_sha3=hash('sha3-512',$this->s_notepad.$s_hash);
    }
    if($this->s_hash!=='sha3')
      $s_sha1=sha1($this->s_notepad.sha1($s_password));

    if($s_hash&&$s_sha1)
      return $s_sha1.' '.$s_hash;
    if($s_sha3)
      return $s_sha3;
    return $s_sha1;
  }

  /**
   * Evaluates initial hash based on notepad and plain user password (this is value of hash that is stored in the database).
   *
   * <b>Be attentive!</b> This method has a server-side counterpart.
   *
   * @param string $s_password Plain user password.
   * @return string Hashed user password.
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

    // Unlike server side, in JS only HEX hash is supported.
    // For this reason, API expects HEX string and not a raw hash.
    return hash('sha3-512', implode($s_password,$a_delimiter).$s_password,/*Important! See comment above.*/false);
  }
}

?>