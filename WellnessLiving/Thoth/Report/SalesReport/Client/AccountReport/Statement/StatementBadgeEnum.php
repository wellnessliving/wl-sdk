<?php

namespace WellnessLiving\Thoth\Report\SalesReport\Client\AccountReport\Statement;

/**
 * Status badges shown under a payment method in the account statement.
 *
 * A badge marks a transaction whose money has not been collected yet, or was not collected at all.
 * Both statement
 * templates render the badge from `a_transaction[].text_badge` of {@link StatementDataApi::$a_row}
 * (the title of the case) and pick the colour variant from `a_transaction[].is_badge_failed`, which
 * comes from {@link StatementBadgeEnum::isFailed()}; `a_transaction[].id_badge` carries the case
 * value for API consumers.
 *
 * Last used ID: 10
 *
 * @method static StatementBadgeEnum classEid(string $s_class, ?string $s_prefix = null)
 * @method static StatementBadgeEnum constantEid(string $s_constant)
 * @method static StatementBadgeEnum idEid(int $id)
 * @method static StatementBadgeEnum sidEid(string $sid)
 */
class StatementBadgeEnum
{
  /**
   * An automatic payment (Purchase Options auto-payment or renewal, a payment plan installment, or
   * bulk billing) failed and no outcome has occurred yet. Later re-evaluation of the same
   * transaction may turn this into {@link StatementBadgeEnum::AUTO_PAYMENT_FAILED_RECOVERED} or
   * {@link StatementBadgeEnum::AUTO_PAYMENT_FAILED_ACCOUNT_CHARGE}.
   */
  const AUTO_PAYMENT_FAILED = 10;

  /**
   * An automatic payment initially failed and, a few days later, was charged to the account
   * balance instead of being collected.
   */
  const AUTO_PAYMENT_FAILED_ACCOUNT_CHARGE = 9;

  /**
   * A staff member manually changed the status of an automatic payment to `Failed`. There were no
   * reattempts and nothing was charged to the account balance.
   */
  const AUTO_PAYMENT_FAILED_MANUAL = 7;

  /**
   * An automatic payment initially failed, but a later reattempt for the same purchase, installment
   * or bulk billing batch succeeded.
   */
  const AUTO_PAYMENT_FAILED_RECOVERED = 8;

  /**
   * A payment towards the account balance failed: the delayed refill was canceled and nothing was
   * credited to the balance.
   */
  const BALANCE_PAYMENT_FAILED = 2;

  /**
   * The ACH payment for a manual purchase failed to settle a few days after the purchase, so it was
   * charged to the account balance.
   */
  const PURCHASE_FAILED_ACCOUNT_CHARGE = 4;

  /**
   * The purchase failed at checkout and was not complete.
   */
  const PURCHASE_FAILED_CANCELED = 5;

  /**
   * A staff member manually changed the status of a purchase to `Failed`. There were no reattempts
   * and nothing was charged to the account balance.
   */
  const PURCHASE_FAILED_MANUAL = 3;

  /**
   * A purchase payment first failed but got resolved after a retry.
   */
  const PURCHASE_FAILED_RECOVERED = 6;

  /**
   * A payment is waiting for settlement, for example an ACH payment that has not settled yet. The
   * amount is not credited to the account balance until the payment settles.
   */
  const WAITING_SETTLEMENT = 1;
}

?>