<?php

namespace WellnessLiving\Wl\Report;

/**
 * Set of report pages.
 */
abstract class WlReportPageSid
{
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