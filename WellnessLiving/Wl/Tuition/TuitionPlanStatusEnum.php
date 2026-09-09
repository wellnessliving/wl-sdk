<?php

namespace WellnessLiving\Wl\Tuition;

/**
 * List of tuition statuses.
 */
class TuitionPlanStatusEnum
{
  /**
   * Tuition plan status - cancelled.
   *
   * @title Cancelled
   */
  const CANCELLED = 2;

  /**
   * Tuition plan status - completed.
   *
   * @title Past
   */
  const COMPLETED = 3;

  /**
   * Tuition plan status - in progress right now.
   *
   * @title Active
   */
  const IN_PROGRESS = 1;

  /**
   * Tuition plan status - undefined.
   *
   * @title Undefined
   */
  const UNDEFINED = 5;

  /**
   * Tuition plan status - upcoming.
   *
   * @title Upcoming
   */
  const UPCOMING = 4;
}

?>