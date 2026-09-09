<?php

namespace WellnessLiving\Wl\Catalog\Receive;

use WellnessLiving\Wl\Report\WlReportSid;

/**
 * List of possible sources to come on page with receipt actions.
 *
 * Last used ID: 6.
 */
class CatalogReceiveBackSid
{
  /**
   * Attendance list.
   */
  const ATTENDANCE_LIST = 4;

  /**
   * Online Store.
   */
  const CATALOG_LIST = 1;

  /**
   * Billing tab in user's profile.
   */
  const PROFILE_BILLING = 2;

  /**
   * System transaction report.
   */
  const REPORT_PURCHASE_ITEM_LIST_PRODUCT = 6;

  /**
   * Transaction report.
   */
  const REPORT_TRANSACTION = 3;

  /**
   * System transaction report.
   *
   * @see WlReportSid::PAY_TRANSACTION_SYSTEM_LIST
   */
  const REPORT_TRANSACTION_SYSTEM = 5;
}

?>