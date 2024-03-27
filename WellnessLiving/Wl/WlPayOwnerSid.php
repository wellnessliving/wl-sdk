<?php

namespace WellnessLiving\Wl;

/**
 * A list of money owners from which account money can be transferred.
 */
abstract class WlPayOwnerSid
{
  /**
   * Anonymous user (Walk-In).
   */
  const ANONYMOUS = 3;

  /**
   * Business.
   */
  const BUSINESS = 2;

  /**
   * System user.
   */
  const USER = 1;
}

?>