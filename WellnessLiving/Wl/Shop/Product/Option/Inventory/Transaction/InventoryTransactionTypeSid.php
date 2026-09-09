<?php

namespace WellnessLiving\Wl\Shop\Product\Option\Inventory\Transaction;

/**
 * List of types of product inventory transactions.
 *
 * Last ID: 6.
 */
class InventoryTransactionTypeSid
{
  /**
   * Adjustment.
   *
   * @title Adjustment
   */
  const ADJUSTMENT = 1;

  /**
   * Change or create new product.
   *
   * @title Edit
   */
  const EDIT = 3;

  /**
   * Import product.
   *
   * @title Import
   */
  const IMPORT = 6;

  /**
   * Initialization.
   *
   * @title Init
   */
  const INIT = 2;

  /**
   * Purchase product.
   *
   * @title Purchase
   */
  const PURCHASE = 4;

  /**
   * Refund product.
   *
   * @title Refund
   */
  const REFUND = 5;
}

?>