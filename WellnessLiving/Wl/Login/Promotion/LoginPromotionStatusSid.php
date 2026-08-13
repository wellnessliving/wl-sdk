<?php

namespace WellnessLiving\Wl\Login\Promotion;

/**
 * A list of statuses of purchased promotions.
 *
 * Last used ID: 4.
 */
class LoginPromotionStatusSid
{
  /**
   * Promotion is currently active.
   */
  const ACTIVE = 2;

  /**
   * Promotion is cancelled.
   */
  const CANCEL = 3;

  /**
   * Promotion is cancelled due to sent to collections.
   */
  const COLLECTED = 4;

  /**
   * Promotion has expired.
   *
   * This status is set on promotions that are not renewable and {@link \RsPromotionPaySchedule::CANCEL_TIMEOUT} days
   * passed after expiration of promotion.
   */
  const EXPIRE = 1;

  /**
   * Old promotions for which status is not stored in the database.
   *
   * System should behave using old rules: try to derive status of promotion based on data from other sources.
   */
  const UNDEFINED = 0;
}

?>