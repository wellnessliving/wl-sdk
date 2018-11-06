<?php

namespace WellnessLiving;

/**
 * A list of money owners from which account money can be transferred.
 */
class WlPayOwnerSid
{
  /**
   * System user.
   */
  const USER = 1;
  
  /**
   * Business.
   */
  const BUSINESS = 2;
  
  /**
   * Anonymous user (Walk-In).
   */
  const ANONYMOUS = 3;
}

?>