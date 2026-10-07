<?php

namespace WellnessLiving\Wl\Marketing\Automation\Recipient;

/**
 * List of recipient exclude reasons.
 *
 * Last used ID: 22.
 */
class RecipientExcludeReasonSid
{
  /**
   * Excluded by age (audience filter).
   */
  const AGE = 19;

  /**
   * Excluded by client type (audience filter).
   */
  const CLIENT_TYPE = 3;

  /**
   * Exited after the lead stage of the client changed (exit criteria).
   *
   * The recipient is not filtered out: they leave the automation because their stage stopped being the one
   * they entered it with, or became one of the stages the automation watches. Always paired with
   * {@link RecipientStatusSid::CRITERIA_EXIT}.
   * The enrollment stage is stored in {@link AutomationRecipientLeadStageSql}; the current stage is read
   * when displaying the reason.
   */
  const EXITED_LEAD_STAGE_CHANGED = 22;

  /**
   * Excluded by gender (audience filter).
   */
  const GENDER = 20;

  /**
   * Excluded by lead stage (audience filter).
   */
  const LEAD_STAGE = 21;

  /**
   * Excluded by home location (audience filter).
   */
  const LOCATION = 5;

  /**
   * Manually excluded.
   */
  const MANUAL = 1;

  /**
   * Excluded by member group (audience filter).
   */
  const MEMBER_GROUP = 4;

  /**
   * Excluded after purchase option cancellation (exit criteria).
   */
  const PROMOTION_CANCEL = 13;

  /**
   * Excluded after purchase option expiration (exit criteria).
   */
  const PROMOTION_EXPIRE = 14;

  /**
   * Excluded after purchase option placed on hold (exit criteria).
   */
  const PROMOTION_HOLD = 15;

  /**
   * Excluded after purchase option fully used up (exit criteria).
   */
  const PROMOTION_USE = 16;

  /**
   * Excluded after making a purchase (exit criteria).
   */
  const PURCHASE_NEW = 9;

  /**
   * Excluded by purchase (audience filter).
   */
  const PURCHASE_PAST = 10;

  /**
   * Excluded by purchase status (audience filter).
   */
  const PURCHASE_STATUS = 6;

  /**
   * Excluded after responding to an SMS message (exit criteria).
   */
  const SMS_RESPONSE = 18;

  /**
   * Excluded by trigger condition.
   */
  const TRIGGER_CONDITION = 2;

  /**
   * Excluded as a result of trigger data validation.
   */
  const TRIGGER_NOT_VALID = 17;

  /**
   * Excluded after attending a visit (exit criteria).
   */
  const VISIT_ATTEND = 8;

  /**
   * Excluded after booking a visit (exit criteria).
   */
  const VISIT_BOOK = 7;

  /**
   * Excluded after cancelling a visit (exit criteria).
   */
  const VISIT_CANCEL = 12;

  /**
   * Excluded due to having a future visit booked (audience filter).
   */
  const VISIT_FUTURE = 11;
}

?>