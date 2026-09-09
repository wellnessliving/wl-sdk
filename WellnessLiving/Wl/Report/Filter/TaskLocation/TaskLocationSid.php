<?php

namespace WellnessLiving\Wl\Report\Filter\TaskLocation;

/**
 * A list of task location filters.
 *
 * Last ID: 2.
 */
class TaskLocationSid
{
  /**
   * Tasks assigned to staff members from current location only.
   */
  const HOME = 1;

  /**
   * Tasks assigned to staff members from other locations.
   */
  const OTHER = 2;
}

?>