<?php

namespace WellnessLiving\Wl\Promotion\Edit;

/**
 * Possible types of purchase option limits.
 *
 * Last used ID: 3.
 */
class LimitSid
{
  /**
   * Purchase option limited be duration.
   */
  const DURATION = 1;

  /**
   * Purchase option limited be count of visits.
   */
  const LIMIT = 2;

  /**
   * Purchase option not limited by number of visits it is limited only be expiration date.
   */
  const UNLIMIT = 3;
}

?>