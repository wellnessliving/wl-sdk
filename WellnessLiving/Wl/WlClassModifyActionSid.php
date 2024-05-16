<?php

namespace WellnessLiving\Wl;

/**
 * The list of possible actions for class modify wizard.
 */
abstract class WlClassModifyActionSid
{
  /**
   * Cancel class schedule.
   */
  const CANCEL = 2;

  /**
   * Change class schedule.
   */
  const EDIT = 1;

  /**
   * Restore cancelled schedule.
   */
  const RESTORE = 3;
}

?>