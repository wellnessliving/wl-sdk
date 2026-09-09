<?php

namespace WellnessLiving\Wl;

/**
 * A list of account types which can be chosen.
 *
 * @link https://www.usbank.com/pdf/Deposit-Account-Agreement.pdf A deposit account agreement where you can read about account types.
 */
abstract class RsPayBankAchTypeSid
{
  /**
   * Checking account.
   */
  const CHECKING = 1;

  /**
   * Savings account.
   */
  const SAVINGS = 2;
}

?>