<?php

namespace WellnessLiving\Wl\Marketing\Automation\Dependency;

/**
 * List of dependency contexts.
 *
 * Last ID: 17.
 */
class DependencyContextEnum
{
  /**
   * Used in exit criteria (lead stage is changed).
   */
  const EXIT_CRITERIA_LEAD_STAGE_CHANGE = 14;

  /**
   * Target lead stage of the exit criterion "lead stage changes".
   *
   * {@link DependencyContextEnum::EXIT_CRITERIA_LEAD_STAGE_CHANGE} cannot be used for it: it already stores the
   *  lead stages that trigger the exit in the same table, so the two would be mixed.
   */
  const EXIT_CRITERIA_MOVE_STAGE_LEAD_STAGE_CHANGE = 15;

  /**
   * Target lead stage of the exit criterion "client responds to marketing SMS".
   *
   * This exit criterion has no context of its own.
   */
  const EXIT_CRITERIA_MOVE_STAGE_SMS_RESPONSE = 16;

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
   * Target lead stage of the automation finish.
   */
  const FINISH_MOVE_STAGE = 17;

  /**
   * Used in trigger context.
   */
  const TRIGGER = 1;
}

?>