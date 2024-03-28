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
}

?>