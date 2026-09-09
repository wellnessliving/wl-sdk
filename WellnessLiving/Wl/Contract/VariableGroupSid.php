<?php

namespace WellnessLiving\Wl\Contract;

/**
 * List of groups of variables.
 * Each group has its own set of variables.
 */
class VariableGroupSid
{
  /**
   * Variable group for event contracts.
   */
  const EVENT = 4;

  /**
   * Variable group for membership contracts.
   */
  const MEMBERSHIP = 1;

  /**
   * Variable group for business online waiver.
   */
  const ONLINE_WAIVER = 2;

  /**
   * Variable group for promotion and package contracts.
   */
  const PROMOTION = 3;
}

?>