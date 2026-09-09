<?php

namespace WellnessLiving\Wl\Marketing\Automation\Recipient;

/**
 * List of recipient statuses.
 *
 * Last used ID: 5.
 */
class RecipientStatusSid
{
  /**
   * 'Exit' status.
   * Set when the recipient met exit criteria of the automation.
   */
  const CRITERIA_EXIT = 3;

  /**
   * 'Excluded' status.
   * Set when the recipient is excluded from the automation manually or automatically.
   */
  const EXCLUDED = 1;

  /**
   * 'Finished' status.
   * Set when the recipient completed all steps of the automation.
   */
  const FINISHED = 2;

  /**
   * 'In Progress' status.
   * Set when the recipient is currently going through the automation.
   */
  const IN_PROGRESS = 4;
}

?>