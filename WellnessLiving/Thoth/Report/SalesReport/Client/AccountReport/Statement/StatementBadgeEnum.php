<?php

namespace WellnessLiving\Thoth\Report\SalesReport\Client\AccountReport\Statement;

/**
 * Status badges shown under a payment method in the account statement.
 *
 * A badge marks a transaction whose money has not been collected yet, or was not collected at all.
 * Both statement
 * templates render the badge from `a_transaction[].text_badge` of {@link StatementDataApi::$a_row}
 * (the title of the case), pick the colour variant from `a_transaction[].is_badge_failed`, which
 * comes from {@link StatementBadgeEnum::isFailed()}, and pick the icon variant from
 * `a_transaction[].is_badge_redo`, which comes from {@link StatementBadgeEnum::isRedo()};
 * `a_transaction[].id_badge` carries the case value for API consumers.
 *
 * Titles are translatable messages resolved through {@link EnumTrait::idTitle()}, except
 * {@link StatementBadgeEnum::REATTEMPT_SCHEDULED} and {@link StatementBadgeEnum::REATTEMPTED}: their
 * title carries a date, so {@link \Thoth\Report\SalesReport\Client\AccountReport\Statement\StatementData}
 * resolves them through {@link EnumTrait::titleSource()} and `m()` directly, substituting `[dl_date]`.
 *
 * Last used ID: 12
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
   *
   * For an attempt the monolith wrote a `wl_purchase_attempt_chain` row for (a Purchase Option
   * membership renewal, a Duration/Limit/Pass renewal, or a bulk billing charge, see WL-96094),
   * whose reattempt chain {@link StatementBadgeState} can follow in full, this case in practice only
   * appears when a writer has not yet marked the compensating debit (see
   * {@link StatementAccountDebitMarker}) - every other transaction of such a chain resolves to one of
   * the two cases above, {@link StatementBadgeEnum::REATTEMPTED} or
   * {@link StatementBadgeEnum::REATTEMPT_SCHEDULED}. A payment plan installment - which
   * {@link StatementBadgeState} never treats as a followable reattempt chain, its siblings being
   * every purchase of the whole plan across every due date rather than a retry chain - keeps using
   * this case for every attempt but the last, and so does an attempt with no attempt-chain row at
   * all (most likely a bulk-billing purchase made before WL-96094 shipped).
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
   * An automatic payment failed, and the reattempt immediately after it (by date) has already
   * happened and failed too, without resolving the chain either way yet. The title carries the
   * date of that reattempt and never changes once set, even after the chain later resolves through
   * a later attempt - only the attempt immediately before the one that resolves the chain becomes
   * {@link StatementBadgeEnum::AUTO_PAYMENT_FAILED_RECOVERED} or
   * {@link StatementBadgeEnum::AUTO_PAYMENT_FAILED_ACCOUNT_CHARGE}.
   */
  const REATTEMPTED = 12;

  /**
   * An automatic payment failed and a reattempt is scheduled - no later attempt for the same chain
   * exists yet. The title carries the projected date of that reattempt, which is not read from a
   * live schedule: the interval between reattempts is fixed by the pool and bulk-billing retry
   * schedulers, not by business configuration, so this transaction's own date plus that fixed
   * interval is the same value the scheduler itself would use.
   */
  const REATTEMPT_SCHEDULED = 11;

  /**
   * A payment is waiting for settlement, for example an ACH payment that has not settled yet. The
   * amount is not credited to the account balance until the payment settles.
   */
  const WAITING_SETTLEMENT = 1;
}

?>