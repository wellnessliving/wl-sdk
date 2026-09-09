<?php

namespace WellnessLiving\Wl;

/**
 * Level of access to the report.
 *
 * Last used ID: 5
 */
abstract class RsReportAccessSid
{
  /**
   * Access for staff of business.
   */
  const BUSINESS = 2;

  /**
   * Access for client.
   */
  const CLIENT = 3;

  /**
   * Custom access.
   *
   * @deprecated Use {@link RsReportAccessSid::GUEST} in all new reports, which are inherited from {@link \Thoth\ReportCore\Generator\ReportGeneratorReportAbstract}.
   */
  const CUSTOM = 5;

  /**
   * Access for guest.
   */
  const GUEST = 4;

  /**
   * Access only for administrator.
   */
  const ROOT = 1;
}

?>