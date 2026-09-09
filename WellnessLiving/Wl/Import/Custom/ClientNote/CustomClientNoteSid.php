<?php

namespace WellnessLiving\Wl\Import\Custom\ClientNote;

/**
 * List of columns required to import client notes.
 *
 * Last used ID: 5.
 */
abstract class CustomClientNoteSid
{
  /**
   * Client's first name.
   */
  const FIRST_NAME = 2;

  /**
   * Client's last name.
   */
  const LAST_NAME = 3;

  /**
   * Id of the member within the business.
   */
  const MEMBER_ID = 1;

  /**
   * Text of the note.
   */
  const NOTE = 4;

  /**
   * Client's uid.
   */
  const UID = 5;
}

?>