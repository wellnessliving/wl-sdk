<?php

namespace WellnessLiving\Wl\Business\RegionTravel;

/**
 * A list of statuses of travelling process.
 */
class TravelStatusSid
{
  /**
   * Travelling is now active.
   *
   * If one of the steps fails and requires manual intervention,
   * the travelling process will be `ACTIVE`.
   * It does not get aborted due to errors at individual steps.
   *
   * Travellings are created initially in this status.
   *
   * The travelling stays in this status while there is at least one step that is not completed yet.
   *
   * From this status, travelling may be transitioned to {@link TravelStatusSid::COMPLETE} when all
   */
  const ACTIVE = 1;

  /**
   * Travelling is now completed successfully.
   */
  const COMPLETE = 2;
}

?>