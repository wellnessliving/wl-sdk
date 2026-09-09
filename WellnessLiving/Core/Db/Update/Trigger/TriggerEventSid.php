<?php

namespace WellnessLiving\Core\Db\Update\Trigger;

/**
 * A list of trigger event types.
 */
class TriggerEventSid
{
  /**
   * Trigger is called when a row is deleted.
   */
  const DELETE = 1;

  /**
   * Trigger is called when a new row is inserted.
   */
  const INSERT = 2;

  /**
   * Trigger is called when a row is updated.
   */
  const UPDATE = 3;
}

?>