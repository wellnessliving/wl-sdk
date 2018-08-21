<?php

namespace WellnessLiving\Core\Passport\Login\Enter;

use WellnessLiving\WlModelAbstract;

/**
 * Generates notepad for user sign in form.
 */
class NotepadModel extends WlModelAbstract
{
  /**
   * Value of notepad to hash user password. 20 lowercase hexadecimal digits.
   *
   * <tt>null</tt> if notepad is not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $s_notepad=null;
}

?>