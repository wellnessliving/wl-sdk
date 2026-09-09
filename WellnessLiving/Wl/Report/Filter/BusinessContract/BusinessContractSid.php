<?php

namespace WellnessLiving\Wl\Report\Filter\BusinessContract;

/**
 * Signed business contracts status.
 */
class BusinessContractSid
{
  /**
   * Clients have outstanding unsigned business contracts.
   */
  const NO = 2;

  /**
   * Clients have not any business contracts.
   *
   * @title No Contract
   */
  const NOT_CONTAIN = 3;

  /**
   * Clients do not have any outstanding unsigned business contracts.
   */
  const YES = 1;
}

?>