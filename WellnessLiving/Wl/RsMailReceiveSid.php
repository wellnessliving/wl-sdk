<?php

namespace WellnessLiving\Wl;

/**
 * Type of the receiver.
 */
abstract class RsMailReceiveSid
{
  /**
   * Only admins receive this email.
   */
  const ADMIN = 2;

  /**
   * Any kind of user can receive this email.
   */
  const ANY = 1;

  /**
   * Only clients receive this email.
   */
  const CLIENT = 4;

  /**
   * Only instructors and owners receive this email.
   */
  const STAFF = 3;
}

?>