<?php

namespace WellnessLiving\Wl;

/**
 * A list of staff editor pages.
 *
 * Last id: 7.
 */
abstract class RsStaffEditSid
{
  /**
   * Calendar sync tab on staff edit page.
   */
  const CALENDAR_SYNC = 7;

  /**
   * General tab on staff edit page.
   */
  const GENERAL = 1;

  /**
   * Location tab on staff edit page.
   */
  const LOCATION = 2;

  /**
   * Notifications tab on staff edit page.
   */
  const NOTIFICATION = 4;

  /**
   * Pay Rates tab on staff edit page.
   */
  const PAY = 5;

  /**
   * Working Hours tab on staff edit page.
   */
  const PERIOD = 6;

  /**
   * Services tab on staff edit page.
   */
  const SERVICE = 3;
}

?>