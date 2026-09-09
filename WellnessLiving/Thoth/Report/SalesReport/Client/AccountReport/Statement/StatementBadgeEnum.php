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
 * Last used ID: 2
 *
 * @method static StatementBadgeEnum classEid(string $s_class, ?string $s_prefix = null)
 * @method static StatementBadgeEnum constantEid(string $s_constant)
 * @method static StatementBadgeEnum idEid(int $id)
 * @method static StatementBadgeEnum sidEid(string $sid)
 */
class StatementBadgeEnum
{
  }

?>