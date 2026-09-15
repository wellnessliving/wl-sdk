<?php

namespace WellnessLiving\Thoth\Report\SalesReport\Client\AccountReport\Statement;

use WellnessLiving\Thoth\Report\SalesReport\Client\AccountReport\PaymentTypeAccountFilterField\PaymentTypeAccountSid;

/**
 * Row type of statement row built from a transaction paid by a method other than the account balance.
 *
 * Deliberately not a value of {@link PaymentTypeAccountSid}: that class is the source of the Type filter of the
 * Balance History report, and none of these three values describes an account transaction. `text_type` of
 * {@link StatementDataApi::$a_row} is filled from {@link StatementRowTypeEnum::idTitle()}, never from
 *
 * Last used ID: 3.
 *
 * @method static StatementRowTypeEnum classEid(string $s_class, ?string $s_prefix = null)
 * @method static StatementRowTypeEnum constantEid(string $s_constant)
 * @method static StatementRowTypeEnum idEid(int $id)
 * @method static StatementRowTypeEnum sidEid(string $sid)
 */
class StatementRowTypeEnum
{
  /**
   * Purchase.
   */
  const PURCHASE = 1;

  /**
   * Refund.
   */
  const REFUND = 3;

  /**
   * Void.
   */
  const VOID = 2;
}

?>