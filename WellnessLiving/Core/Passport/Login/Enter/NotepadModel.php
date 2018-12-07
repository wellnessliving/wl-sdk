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
   * <tt>'sha1'</tt> to send sha-1 hash (it is used by stale client applications which do not accept this field).
   * <tt>'sha3'</tt> to send sha-3 hash (this should be used after completion of migration process).
   * <tt>'sha1,sha3'</tt> to send both hashes.
   *
   * Currently, we are in process of migration of how user passwords are stored.
   * Previously, user passwords were stored as SHA1 hash. New hashing algorithm in SHA3.
   *
   * If user did not update his password, you should send password in <tt>'sha1'</tt> or <tt>'sha1,sha3'</tt> format.
   * If you send <tt>'sha1,sha3'</tt>, user password will be updated automatically.
   *
   * If user password is updated, only <tt>sha3</tt> is accepted.
   *
   * When hash migration process will be completed, only <tt>sha3</tt> hashes will be accepted.
   *
   * Use {@link \WellnessLiving\Core\Passport\Login\Enter\NotepadModel::hash()} to set password correctly.
   *
   * TODO wl-14702: Remove this.
   *
   * @get result
   * @var string|null
   */
  public $s_hash=null;

  /**
   * User login.
   *
   * If specified, additional information about user password is returned (specifically,
   * {@link \WellnessLiving\Core\Passport\Login\Enter\NotepadModel::$s_hash} is returned).
   *
   * <tt>null</tt> if additional information is not needed (old code).
   *
   * Although this field is not required, your application should set it.
   * It is required to retrieve value of {@link \WellnessLiving\Core\Passport\Login\Enter\NotepadModel::$s_hash} which
   * is required to derive user password hash correctly.
   *
   * TODO wl-14702: This only used to learn if new hash should be sent to server. Remove this feature.
   *
   * @get get
   * @type {String|null}
   */
  public $s_login=null;

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