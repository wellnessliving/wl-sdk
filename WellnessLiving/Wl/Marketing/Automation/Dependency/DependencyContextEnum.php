<?php

namespace WellnessLiving\Wl\Marketing\Automation\Dependency;

/**
 * List of dependency contexts.
 *
 * Last ID: 13.
 */
class DependencyContextEnum
{
  /**
   * Used in exit criteria (purchase option is cancelled).
   */
  const EXIT_CRITERIA_PROMOTION_CANCEL = 10;

  /**
   * Used in exit criteria (purchase option is expired).
   */
  const EXIT_CRITERIA_PROMOTION_EXPIRE = 11;

  /**
   * Used in exit criteria (purchase option is on hold).
   */
  const EXIT_CRITERIA_PROMOTION_HOLD = 12;

  /**
   * Used in exit criteria (purchase option is used up).
   */
  const EXIT_CRITERIA_PROMOTION_USE = 13;

  /**
   * Used in exit criteria (client make a purchase).
   */
  const EXIT_CRITERIA_PURCHASE = 4;

  /**
   * Used in exit criteria (client attend a service).
   */
  const EXIT_CRITERIA_SERVICE_ATTEND = 3;

  /**
   * Used in exit criteria (client book a service).
   */
  const EXIT_CRITERIA_SERVICE_BOOK = 2;

  /**
   * Used in exit criteria (client cancel a service).
   */
  const EXIT_CRITERIA_SERVICE_CANCEL = 9;

  /**
   * Used in audience filter (client group, member group, home location).
   */
  const FILTER = 5;

  /**
   * Used in audience filter (bookings).
   */
  const FILTER_BOOK = 7;

  /**
   * Used in audience filter (past purchases).
   */
  const FILTER_PURCHASE = 8;

  /**
   * Used in audience filter (purchase option status).
   */
  const FILTER_PURCHASE_STATUS = 6;

  /**
   * Used in trigger context.
   */
  const TRIGGER = 1;
}

?>