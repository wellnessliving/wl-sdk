<?php

namespace WellnessLiving\Wl\Import\Custom\Contact;

use WellnessLiving\Wl\Contact\ContactSid;

/**
 * List of columns required to import contact log.
 *
 * Last used ID: 13.
 */
abstract class CustomContactSid
{
  /**
   * Client name in format: `Name, Surname`.
   */
  const CLIENT = 5;

  /**
   * Last name of the client.
   */
  const CLIENT_FAMILY = 9;

  /**
   * Client member ID.
   */
  const CLIENT_ID = 12;

  /**
   * First name of the client.
   */
  const CLIENT_NAME = 8;

  /**
   * Contact method. One of {@link ContactSid} constants.
   * By default {@link ContactSid::EMAIL} used.
   *
   * @see ContactSid
   */
  const CONTACT_METHOD = 6;

  /**
   * If not specified then specific type named "Import" will be created.
   */
  const CONTACT_TYPE = 4;

  /**
   * Date contact log was actually occurred.
   */
  const DATE = 3;

  /**
   * Local date to create task for a staff member.
   */
  const DATE_DUE = 2;

  /**
   * Contact log content.
   */
  const DESCRIPTION = 7;

  /**
   * Staff -> Staff member name.
   */
  const STAFF = 1;

  /**
   * Last name of the staff member.
   */
  const STAFF_FAMILY = 11;

  /**
   * First name of the staff member.
   */
  const STAFF_NAME = 10;

  /**
   * First name of the staff member.
   */
  const UID_CLIENT = 13;
}

?>