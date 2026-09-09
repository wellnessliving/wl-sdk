<?php

namespace WellnessLiving\Wl\Member\Subscribe;

/**
 * Client subscribe status.
 */
class MemberSubscribeSid
{
  /**
   * Client is not subscribed to 'News and Updates' email notifications of business.
   */
  const EMAIL_NO = 2;

  /**
   * Client is subscribed to 'News and Updates' email notifications of business.
   */
  const EMAIL_YES = 1;

  /**
   * Client is not subscribed to 'News and Updates' sms notifications of business.
   */
  const SMS_NO = 3;

  /**
   * Client is subscribed to 'News and Updates' sms notifications of business.
   */
  const SMS_YES = 4;
}

?>