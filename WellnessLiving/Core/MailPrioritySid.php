<?php

namespace WellnessLiving\Core;

/**
 * Class contains identifiers that define the priority of the e-mail.
 */
class MailPrioritySid
{
  /**
   * Important administrator reports.
   * Up to tens of e-mail messages per day.
   */
  const HIGH = 20;

  /**
   * Site news, any notifications that can be sent to all users of the site.
   * Number of recipients - very large.
   */
  const LOW = 40;

  /**
   * Private messages, all notices that may occur at an arbitrary time, notification messages in the forum, reviews, etc.
   * Number of recipients - hundreds/thousands, limited by the number of subscribers to individual services within individual objects.
   */
  const MEDIUM = 30;

  /**
   * All system operations, such as an error log.
   * Several e-mails per day.
   */
  const SYSTEM = 1;

  /**
   * All operations with the account, when the user clicks the button on the site, and then waits for an e-mail.
   * There may be many e-mail messages, but these are urgent messages that should not stay in the queue for a long time.
   */
  const URGENT = 10;
}

?>