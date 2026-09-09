<?php

namespace WellnessLiving\Thoth\WlPay\Owner;

/**
 * List of purchase actors: who pays and who owns.
 *
 * Last used ID: 2.
 */
class PurchaseOwnerSid
{
  /**
   * Who pays money.
   */
  const MONEY_OWNER = 2;

  /**
   * Who owns the purchase.
   */
  const PURCHASE_OWNER = 1;
}

?>