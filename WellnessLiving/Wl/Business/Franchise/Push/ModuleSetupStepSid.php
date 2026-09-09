<?php

namespace WellnessLiving\Wl\Business\Franchise\Push;

/**
 * A class with steps for pushing franchise settings.
 */
class ModuleSetupStepSid
{
  /**
   * A step for selecting locations.
   */
  const LOCATION = 2;

  /**
   * A step for selecting pushed items.
   */
  const MODULE = 1;

  /**
   * A step for showing pushed items and their dependencies.
   */
  const REVIEW = 3;
}

?>