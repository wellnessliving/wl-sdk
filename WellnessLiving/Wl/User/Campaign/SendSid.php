<?php

namespace WellnessLiving\Wl\User\Campaign;

/**
 * Mail campaign send actions.
 */
class SendSid
{
  /**
   * Emails have been sent to the user but have not been opened.
   */
  const OPEN_NO = 4;

  /**
   * Emails have been opened by the user.
   */
  const OPEN_YES = 2;

  /**
   * Emails have not been sent to the user.
   */
  const SEND_NO = 3;

  /**
   * Emails have been sent to the user.
   */
  const SEND_YES = 1;
}

?>