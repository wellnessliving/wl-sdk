<?php

namespace WellnessLiving\Wl\Report\Filter\Purchase;

/**
 * Types of accounting.
 *
 * @link https://wellnessliving.atlassian.net/browse/WL-12593
 */
class AccrualCashSid
{
  /**
   * Purchases that are made with account balance or gift cards.
   */
  const ACCRUAL = 1;

  /**
   * Purchases that are made with account balance, gift cards, cash and other real money payment methods.
   */
  const ACCRUAL_AND_CASH = 3;

  /**
   * Purchase that are made with cash and other real money payment methods.
   */
  const CASH = 2;
}

?>