<?php

namespace WellnessLiving\Wl;

/**
 * Class for access type to login note.
 */
abstract class RsLoginNoteAccessSid
{
  /**
   * Login note can view all staff and client.
   */
  const CLIENT = 1;

  /**
   * Login note can view only staff which create this note.
   */
  const ME = 2;

  /**
   * Login note can view only all staff.
   */
  const STAFF = 3;
}

?>