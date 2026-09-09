<?php

namespace WellnessLiving\Wl\Import\Custom\Refund;

/**
 * List of columns required to import refund dates.
 *
 * Last used ID: 2.
 */
abstract class CustomRefundSid
{
  /**
   * New refund date of the transaction.
   */
  const DATE = 1;

  /**
   * ID of the transaction for which refund date should be changed.
   */
  const TRANSACTION = 2;
}

?>