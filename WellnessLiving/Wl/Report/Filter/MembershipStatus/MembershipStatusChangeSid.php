<?php

namespace WellnessLiving\Wl\Report\Filter\MembershipStatus;

/**
 * Possible membership statuses change to filter on in membership report.
 *
 * Last insert ID: 3.
 */
class MembershipStatusChangeSid
{
  /**
   * Membership that started during the selected period.
   *
   * @title New Memberships
   * @link https://wellnessliving.atlassian.net/browse/WL-39351
   */
  const ACTIVATED = 3;

  /**
   * Memberships that changed their status to 'On Hold' during the selected period and stayed with this status
   * up to the last day in the selected period.
   *
   * @title New Memberships On Hold
   * @link https://wellnessliving.atlassian.net/browse/WL-39351
   */
  const HOLD_NEW = 1;

  /**
   * Membership that were canceled or expired during the selected period.
   *
   * @title Lost Memberships
   * @link https://wellnessliving.atlassian.net/browse/WL-39351
   */
  const LOST = 2;
}

?>