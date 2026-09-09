<?php

namespace WellnessLiving\Wl\Mail\Verify;

/**
 * Statuses of mail verification. Based on statuses that returns Amazon SES API.
 * It is necessary for sending email through Amazon SES. Amazon SES can send email only from verified email addresses.
 *
 * Last used ID: 4.
 */
class MailVerifyStatusSid
{
  /**
   * Email is not verified.
   */
  const FAIL = 4;

  /**
   * Verification request is not running.
   */
  const NONE = 1;

  /**
   * Email is verified.
   */
  const VERIFY = 3;

  /**
   * Verification in progress.
   */
  const WAIT_FOR_VERIFY = 2;
}

?>