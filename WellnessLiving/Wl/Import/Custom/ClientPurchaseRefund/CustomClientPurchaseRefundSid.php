<?php

namespace WellnessLiving\Wl\Import\Custom\ClientPurchaseRefund;

/**
 * List of columns required to import purchases members.
 *
 * Last used ID: 7.
 */
abstract class CustomClientPurchaseRefundSid
{
  /**
   * Client name.
   */
  const CLIENT_NAME = 1;

  /**
   * Item title.
   */
  const PURCHASE_TITLE = 2;

  /**
   * Refund date.
   */
  const REFUND_DATE = 3;

  /**
   * Tax.
   */
  const TAX = 4;

  /**
   * Total refund.
   */
  const TOTAL_REFUND = 5;

  /**
   * Transaction.
   */
  const TRANSACTION = 6;

  /**
   * Client's uid.
   */
  const UID = 7;
}

?>