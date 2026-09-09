<?php

namespace WellnessLiving\Core\Db\Update\Trigger;

/**
 * A list of trigger time types.
 */
class TriggerTimeSid
{
  /**
   * Trigger is called after an action on the row.
   */
  const AFTER = 1;

  /**
   * Trigger is called before an action on the row.
   */
  const BEFORE = 2;
}

?>