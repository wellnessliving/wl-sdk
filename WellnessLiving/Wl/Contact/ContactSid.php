<?php

namespace WellnessLiving\Wl\Contact;

/**
 * Contains list of ways to contact with clients.
 */
class ContactSid
{
  /**
   * Contact performed via email.
   */
  const EMAIL = 1;

  /**
   * Contact performed view mail letter.
   */
  const MAIL = 2;

  /**
   * Contact directly to person.
   */
  const PERSON = 3;

  /**
   * Contact via phone call.
   */
  const PHONE = 4;

  /**
   * Contact via push notification.
   */
  const PUSH = 6;

  /**
   * Contact via SMS.
   */
  const SMS = 5;
}

?>