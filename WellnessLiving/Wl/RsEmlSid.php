<?php

namespace WellnessLiving\Wl;

/**
 * A list of Electronic Mailing Lists (EML) management services.
 *
 * Order matters, do not use alphabetical order in this class, because we need Mailchimp to be the first one.
 */
abstract class RsEmlSid
{
  /**
   * Constant contact.
   *
   * @link http://developer.constantcontact.com/docs/developer-guides/overview-of-api-endpoints.html Api documentation.
   */
  const CC = 2;

  /**
   * MailChimp.
   *
   * @link http://mailchimp.com/
   */
  const MAILCHIMP = 1;
}

?>