<?php

namespace WellnessLiving\Wl;

use WellnessLiving\Core\Notification\FailSid;

/**
 * Class to manage statuses of history sent emails.
 *
 * Last ID: 6.
 */
abstract class RsMailHistorySid
{
  /**
   * Set this email history status when it was blacklisted by Amazon or went to spam.
   */
  const BOUNCED = 3;

  /**
   * Set this email history status when message was failed to send.
   * Possible fail reason are listed in {@link FailSid}.
   */
  const FAIL = 5;

  /**
   * Set this email history status when message was scheduled on the future.
   */
  const FUTURE = 6;

  /**
   * Set this email history status when user opened the letter in his mailbox.
   */
  const OPEN = 2;

  /**
   * Set this email history status when message created and not sent.
   */
  const SCHEDULE = 4;

  /**
   * Set this email history status when message sent to user mailbox.
   */
  const SEND = 1;
}

?>