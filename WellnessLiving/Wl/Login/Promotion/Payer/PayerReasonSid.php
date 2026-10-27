<?php

namespace WellnessLiving\Wl\Login\Promotion\Payer;

/**
 * Reasons of a change of the payer of a purchase option.
 *
 * Last used ID: 3.
 */
class PayerReasonSid
{
  /**
   * The payer is changed by a staff member.
   */
  const CHANGED_BY_STAFF = 1;

  /**
   * The payer is deactivated in the business, so the default payer is used.
   */
  const PAYER_DEACTIVATED = 3;

  /**
   * The relationship between the holder and the payer is removed, so the default payer is used.
   */
  const RELATIONSHIP_REMOVED = 2;
}

?>