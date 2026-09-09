<?php

namespace WellnessLiving\Wl\Report\Filter\MemberBalance;

/**
 * Status of member balance.
 */
class MemberBalanceSid
{
  /**
   * Displays clients a negative account balance.
   */
  const NEGATIVE = 1;

  /**
   * Displays clients with a positive account balance.
   */
  const POSITIVE = 2;

  /**
   * Displays clients with an account balance of 0.00.
   */
  const ZERO = 3;
}

?>