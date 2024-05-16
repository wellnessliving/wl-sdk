<?php

namespace WellnessLiving\Wl;

/**
 * The list of possible modify mode for class modify wizard.
 */
abstract class WlClassModifyModeSid
{
  /**
   * Edit class schedule
   */
  const FULL = 1;

  /**
   * Edit instructor in class schedule
   */
  const INSTRUCTOR = 2;

  /**
   * Asset working hours
   */
  const RESOURCE_PERIOD = 4;

  /**
   * Staff working hours
   */
  const STAFF_PERIOD = 3;
}

?>