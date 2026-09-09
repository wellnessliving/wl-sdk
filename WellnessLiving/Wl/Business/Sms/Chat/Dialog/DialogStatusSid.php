<?php

namespace WellnessLiving\Wl\Business\Sms\Chat\Dialog;

/**
 * A class with statuses of dialog.
 *
 * Last used ID: 5.
 */
class DialogStatusSid
{
  /**
   * Need to show all dialog.
   */
  const ALL = 1;

  /**
   * Need to show only archived dialogues.
   */
  const ARCHIVED = 2;

  /**
   * Need to show only read dialogues.
   */
  const READ = 3;

  /**
   * Need to show only replied dialogues.
   */
  const REPLIED = 4;

  /**
   * Need to show only unread dialogues.
   */
  const UNREAD = 5;
}

?>