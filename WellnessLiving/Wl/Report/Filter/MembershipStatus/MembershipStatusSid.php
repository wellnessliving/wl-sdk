<?php

namespace WellnessLiving\Wl\Report\Filter\MembershipStatus;

/**
 * Possible membership statuses to filter on in membership report.
 *
 * Last used ID: 6.
 */
class MembershipStatusSid
{
  /**
   * Membership is active.
   */
  const ACTIVE = 1;

  /**
   * Membership canceled. If membership is canceled within the selected date range.
   */
  const CANCELED = 4;

  /**
   * Membership has been converted.
   */
  const CONVERTED = 6;

  /**
   * Membership expired. If membership expires within the selected date range.
   */
  const EXPIRED = 3;

  /**
   * Membership will be activated in the future.
   *
   * This status previously depended on the system date and date range in the filter. It was used if:
   *   * purchase date is inside selected date range filter.
   *   * starting date is in the future, according to the current system date.
   *
   * After ticket {@link https://wellnessliving.atlassian.net/browse/WL-94198} it has simple logic:
   *   * starting date is in the future, according to the current system date.
   *
   * @title Not Activated
   * @link https://wellnessliving.atlassian.net/browse/WL-35945
   */
  const FUTURE = 5;

  /**
   * Membership is on hold.
   */
  const HOLD = 2;
}

?>