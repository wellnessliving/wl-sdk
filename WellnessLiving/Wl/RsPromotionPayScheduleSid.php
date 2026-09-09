<?php

namespace WellnessLiving\Wl;

use WellnessLiving\Wl\Promotion\Pay\PromotionPayScheduleSid;

/**
 * Types of scheduled payments.
 */
abstract class RsPromotionPayScheduleSid
{
  /**
   * The payment is being performed now.
   */
  const ACTIVE = 6;

  /**
   * A payment that should not be performed.
   *
   * This status is set manually to scheduled payments that should be skipped.
   *
   * On the date of the payment it is not processed and marked as erroneous.
   */
  const COLLECTED = 11;

  /**
   * Automatic payment that has failed.
   */
  const ERROR = 2;

  /**
   * Automatic payments that should be performed in the future.
   */
  const FUTURE = 1;

  /**
   * A scheduled automatic payment that was added manually.
   *
   * Such payments are processed when their date comes.
   */
  const MANUAL = 9;

  /**
   * A payment was performed successfully or rejected due to positive rest at membership's amount.
   *
   * Payments of this type act exactly like {@link PromotionPayScheduleSid::SKIP} with the difference that this
   * type is set automatically only on successful or rejected payment.
   *
   * This type replaces {@link PromotionPayScheduleSid::MANUAL} payments to prevent duplicate payments on that date.
   *
   * The reason to introduce this type of payments is that manual payments can not be removed from schedule after
   * successful processing. If we remove a manual payment, a new {@link PromotionPayScheduleSid::FUTURE} payment
   * may be automatically created on that day. To prevent automatic creation of FUTURE payments, we replace MANUAL
   * payments with OK.
   */
  const OK = 3;

  /**
   * A payment that should not be performed.
   *
   * This status is set manually to scheduled payments that should be skipped.
   *
   * On the date of the payment it is not processed and marked as erroneous.
   */
  const SKIP = 10;
}

?>