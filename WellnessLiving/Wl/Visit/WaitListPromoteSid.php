<?php

namespace WellnessLiving\Wl\Visit;

/**
 * A list of wait list promote state.
 */
abstract class WaitListPromoteSid
{
  /**
   * Client was promoted to active list.
   */
  const ACTIVE = 1;

  /**
   * Client was promoted automated from wait list to active list.
   */
  const AUTO = 2;

  /**
   * Client was promoted to wait confirmation list.
   */
  const CONFIRM = 3;

  /**
   * Client was promoted to wait lit.
   */
  const WAIT = 4;
}

?>