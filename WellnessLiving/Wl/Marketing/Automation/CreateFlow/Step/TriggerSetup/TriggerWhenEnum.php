<?php

namespace WellnessLiving\Wl\Marketing\Automation\CreateFlow\Step\TriggerSetup;

/**
 * Defines list of when types for trigger.
 */
class TriggerWhenEnum
{
  /**
   * @title Any time
   */
  const ANY = 1;

  /**
   * @title After a specific number of actions
   */
  const COUNT = 3;

  /**
   * @title First time only
   */
  const FIRST = 2;

  /**
   * @title After a specific number of actions left
   */
  const REMAIN = 4;
}

?>