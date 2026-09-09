<?php

namespace WellnessLiving\Wl\Purchase\Item;

/**
 * Format types for payment\installment plans. For each constant corresponds title of purchase item.
 *
 * Last used ID: 10
 */
class PurchaseItemInstallmentTitleFormatSid
{
  /**
   * Default format of purchase item's title.
   */
  const DEFAULT_FORMAT = 1;

  /**
   * Default format of purchase item's title for activity.
   */
  const DEFAULT_FORMAT_ACTIVITY = 5;

  /**
   * Default format of purchase item's title for receipt.
   */
  const DEFAULT_FORMAT_RECEIPT = 6;

  /**
   * The visit details only (date, time, and instructor if present) - no item title, no wrapping parentheses.
   * Same underlying booking data as {@link PurchaseItemInstallmentTitleFormatSid::DEFAULT_FORMAT_VISIT_INFO},
   * for consumers that render the item title and its details on separate lines.
   *
   * @link https://wellnessliving.atlassian.net/browse/SAL-1244
   */
  const DEFAULT_FORMAT_VISIT_DETAILS_ONLY = 10;

  /**
   * Extended format with full booking details (service name, date, time, and instructor if present).
   * Used in Client's Activity, Account Statements, "Balance History" and "All Sales" reports.
   *
   * @link https://wellnessliving.atlassian.net/browse/SAL-1022
   */
  const DEFAULT_FORMAT_VISIT_INFO = 9;

  /**
   * The same as {@link PurchaseItemInstallmentTitleFormatSid::DEFAULT_FORMAT} but without indicated amount of items for each item.
   */
  const DEFAULT_FORMAT_WITHOUT_COUNT = 8;

  /**
   * Represents an only list of item names inside of payment plan separated by comma and without indicated amount of items for each item.
   */
  const PAYMENT_PLAN_ITEMS_WITHOUT_COUNT = 7;

  /**
   * Format of purchase item's title with related item title only.
   */
  const PAYMENT_PLAN_ITEM_NAME = 4;

  /**
   * Format of purchase item's title with indicated payment plan number and related item, without count of items inside.
   * Actual for payment view.
   */
  const PAYMENT_PLAN_NUMBER_AND_ITEM_NAME = 2;

  /**
   * Format of purchase item's title with indicated payment plan number only. Actual for item view.
   */
  const PAYMENT_PLAN_NUMBER_PREFIX = 3;
}

?>