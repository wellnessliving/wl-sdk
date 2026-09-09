<?php

namespace WellnessLiving\Wl\Report\Filter\ClientActive;

/**
 * List of combined clients' search statuses of active purchase options.
 *
 * Last used ID: 4.
 */
class ClientHoldSid
{
  /**
   * Client with active purchase options on hold.
   */
  const HOLD = 1;

  /**
   * Client with active purchase options on hold or without active options.
   */
  const HOLD_OR_NO_ACTIVE = 2;

  /**
   * Client with active purchase options not on hold.
   */
  const NO_HOLD = 3;

  /**
   * Client with active purchase options not on hold or without active options.
   */
  const NO_HOLD_OR_NO_ACTIVE = 4;
}

?>