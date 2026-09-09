<?php

namespace WellnessLiving\Wl\Business\Lead;

/**
 * Statuses of the business referred within the partner program.
 *
 * Last used ID: 3.
 *
 * @method static ReferralStatusEnum idEid(int $id)
 * @method static ReferralStatusEnum sidEid(string $sid)
 */
class ReferralStatusEnum
{
  /**
   * The referred business is a current paying subscriber.
   *
   * @title Active
   */
  const ACTIVE = 1;

  /**
   * The referred business has churned, cancelled, expired or was suspended.
   *
   * @title Inactive
   */
  const INACTIVE = 3;

  /**
   * The referred business is registered as a referral, but is not a paying subscriber yet.
   * A business on a trial or on a free plan is in this status too.
   *
   * @title Not Yet Subscribed
   */
  const NOT_SUBSCRIBED = 2;
}

?>