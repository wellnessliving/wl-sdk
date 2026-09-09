<?php

namespace WellnessLiving\Wl\Marketing\Automation\Step;

/**
 * Types of automation steps.
 *
 * Last used ID: 10.
 */
class StepSid
{
  /**
   * Add new step.
   */
  const ADD_NEW = 7;

  /**
   * Change lead stage action.
   */
  const CHANGE_LEAD_STAGE = 10;

  /**
   * Delay between actions.
   */
  const DELAY = 1;

  /**
   * End of the automation.
   */
  const FINISH = 2;

  /**
   * Notify staff by email action.
   */
  const NOTIFY_STAFF_EMAIL = 9;

  /**
   * Send email action.
   */
  const SEND_EMAIL = 3;

  /**
   * Send push notification action.
   */
  const SEND_PUSH = 4;

  /**
   * Send SMS action.
   */
  const SEND_SMS = 5;

  /**
   * Add a task.
   */
  const TASK = 8;

  /**
   * Start of the automation.
   */
  const TRIGGER = 6;
}

?>