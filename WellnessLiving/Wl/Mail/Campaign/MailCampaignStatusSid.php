<?php

namespace WellnessLiving\Wl\Mail\Campaign;

/**
 * Possible statuses of the mail campaigns.
 *
 * Last ID: 4
 */
class MailCampaignStatusSid
{
  /**
   * Email campaign is sent but has no successfully delivered emails.
   *
   * @title Bounced
   */
  const BOUNCED = 4;

  /**
   * Email campaign is sent but all emails are not delivered due to mail server errors.
   *
   * @title Failed
   */
  const FAIL = 3;

  /**
   * Email campaign will be sent in the future.
   *
   * @title Scheduled
   */
  const FUTURE = 2;

  /**
   * Email campaign is sent.
   *
   * @title Sent
   */
  const PAST = 1;
}

?>