<?php

namespace WellnessLiving\Wl\Classes;

/**
 * A list of additional options for
 *  {@link RequirePaySid::VISIT} and {@link RequirePaySid::ADVANCE} modes.
 */
class RequirePayVisitOptionSid
{
  /**
   * Debit the client account for the cost of this session/event.
   */
  const DEBIT = 1;

  /**
   * Add as unpaid session/event.
   */
  const UNPAID = 2;
}

?>