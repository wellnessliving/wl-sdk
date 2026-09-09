<?php

namespace WellnessLiving\Wl\Service;

/**
 * A list of possible service setup statuses.
 */
class ServiceSetupStatusSid
{
  /**
   * Service setup is complete, it can be booked without issue.
   */
  const COMPLETE = 1;

  /**
   * Service has staff available but none of the staff have hours set.
   */
  const NO_HOURS = 2;

  /**
   * Service is required to be paid for with a promotion, but there is no active promotions available for it.
   */
  const NO_PROMOTION = 3;

  /**
   * There are no active staff available for this service.
   */
  const NO_STAFF = 4;
}

?>