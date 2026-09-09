<?php

namespace WellnessLiving\Wl;

/**
 * A list of report categories.
 *
 * Last ID: 9.
 */
abstract class RsReportCategorySid
{
  /**
   * Category reports on attendance.
   *
   * @title Attendance category
   */
  const ATTENDANCE = 2;

  /**
   * Category reports on clients.
   *
   * @title Client category
   */
  const CLIENT = 1;

  /**
   * Category on dashboards.
   */
  const DASHBOARD = 9;

  /**
   * Corporate reports.
   *
   * The one business gets summary information from the all business which are related to it.
   *
   * For example, the franchisor gets information from the all franchisees.
   *
   * @title Corporate Reports
   */
  const FRANCHISE = 6;

  /**
   * Insurance and reimbursements reports.
   *
   * @title Wellness Programs
   */
  const INSURANCE = 7;

  /**
   * Category reports on mail.
   *
   * @title Mail category
   */
  const MAIL = 5;

  /**
   * Metrics category.
   *
   * @title Metrics
   */
  const METRIC = 8;

  /**
   * Category reports on sales.
   *
   * @title Sale category
   */
  const SALE = 4;

  /**
   * Category reports on staff.
   *
   * @title Staff member category
   */
  const STAFF = 3;
}

?>