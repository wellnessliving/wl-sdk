<?php

namespace WellnessLiving\Wl;

/**
 * A list of message types.
 *
 * Last used ID: 15
 */
abstract class StudioMessageSid
{
  /**
   * Notifies personnel about a colleague's birthday.
   */
  const BIRTHDAY = 12;

  /**
   * Notifications about failed builds.
   */
  const BUILD = 11;

  /**
   * Notification that is sent to a personnel on his birthday.
   */
  const CELEBRATION = 15;

  /**
   * Notifications about holiday.
   */
  const HOLIDAY = 13;

  /**
   * Changes in money module.
   */
  const MONEY = 1;

  /**
   * Changes in notice module.
   */
  const NOTICE = 3;

  /**
   * Changes in personnel information.
   */
  const PERSONNEL = 4;

  /**
   * Changes in projects (for example, user was assigned to a project).
   */
  const PROJECT = 9;

  /**
   * Prolongation of the task.
   */
  const PROLONG = 14;

  /**
   * Changes in salary.
   */
  const SALARY = 10;

  /**
   * Starred messages.
   */
  const STAR = 5;

  /**
   * System notifications (such as could not download currencies).
   */
  const SYSTEM = 8;

  /**
   * Task was changed.
   */
  const TASK = 6;

  /**
   * Messages that are not yet read.
   */
  const UNREAD = 2;
}

?>