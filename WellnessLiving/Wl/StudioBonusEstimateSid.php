<?php

namespace WellnessLiving\Wl;

/**
 * Statuses of bonus for precise task time estimate.
 */
abstract class StudioBonusEstimateSid
{
  /**
   * Author is not set.
   */
  const AUTHOR = 5;

  /**
   * Hour cost is zero.
   */
  const HOUR = 9;

  /**
   * Estimate is greater then allowed maximum.
   */
  const MAX = 3;

  /**
   * Estimate is less then allowed minimum.
   */
  const MIN = 2;

  /**
   * Bonus is accounted.
   */
  const OK = 1;

  /**
   * The task is open.
   */
  const OPEN = 6;

  /**
   * Bonus is not accounted in this resolution.
   */
  const RESOLUTION = 8;

  /**
   * Original estimate was changed after the first item to load log was added.
   */
  const RESTRICT = 4;

  /**
   * Original estimate is not set.
   */
  const ZERO = 7;
}

?>