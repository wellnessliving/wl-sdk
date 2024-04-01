<?php

namespace WellnessLiving\Wl\Report;

/**
 * Set of pages for dashboard.
 *
 * Last used ID: 12.
 */
abstract class WlReportPageSid
{
  /**
   * List of requested appointments.
   */
  const APPOINTMENT_REQUEST = 4;

  /**
   * Collection with following reports:
   *
   * * {@link WlReportSid::PROFILE_PURCHASE_REPORT_MEMBERSHIP},
   * * {@link WlReportSid::PROFILE_PURCHASE_REPORT_PACKAGE},
   * * {@link WlReportSid::PROFILE_PURCHASE_REPORT_SESSION_PASS},
   * * {@link WlReportSid::PROFILE_PURCHASE_REPORT_SESSION_DURATION},
   * * {@link WlReportSid::PROFILE_PURCHASE_REPORT_EVENT},
   * * {@link WlReportSid::PROFILE_PURCHASE_REPORT_COUPON},
   * * {@link WlReportSid::PROFILE_PURCHASE_REPORT_SESSION_SINGLE},
   * * {@link WlReportSid::PROFILE_PURCHASE_REPORT_GROUPON}
   */
  const PROFILE_PURCHASE = 11;

  /**
   * Leaderboard to display in backend.
   */
  const REWARD_BOARD = 5;

  /**
   * Current schedule.
   */
  const SCHEDULE_PROSPECT = 3;

  /**
   * Set of staff retention list reports.
   */
  const STAFF_RETENTION = 6;

  /**
   * Set of attendance reports.
   */
  const VISIT = 2;
}

?>