<?php

namespace WellnessLiving\Wl;

/**
 * List of possible ways back from current page.
 *
 * Last used id: 5
 */
class RsBackSid
{
  /**
   * To the dashboard.
   */
  const DASHBOARD = 5;

  /**
   * To the microsite. This way needs Location ID.
   */
  const MICROSITE = 2;

  /**
   * To the client's profile. This way needs User ID.
   */
  const PROFILE = 4;

  /**
   * To the schedule.
   */
  const SCHEDULE = 1;
}

?>