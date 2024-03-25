<?php

namespace WellnessLiving\Core\Passport\Login\Enter;

use \WellnessLiving\Custom\Core\Passport\Login\Enter\NotepadModel as CustomNotepadModel;

/**
 * An endpoint that retrieves the notepad value from the server that is used to sign someone in to the SDK.
 */
class NotepadModel extends CustomNotepadModel
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
   * {@link NotepadModel::NONCE_LENGTH} characters.
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
}

?>