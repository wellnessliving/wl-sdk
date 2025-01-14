<?php

namespace WellnessLiving\Wl;

/**
 * Steps to be passed through to change or cancel class schedule.
 */
abstract class WlClassModifyStepSid
{
  /**
   * List of the impacted clients, configuration of possible notifications.
   * Can be skipped if there are no impacted clients.
   */
  const CLIENT = 4;

  /**
   * List of changes, count of impacted classes and clients, confirmation.
   */
  const CONFIRM = 5;

  /**
   * Config schedule changes. Available on for edit action.
   */
  const FORM = 3;

  /**
   * Select which classes within chosen date range will be modified.
   */
  const ITEM = 2;

  /**
   * Choose when the action will be applied.
   */
  const PERIOD = 1;
}

?>