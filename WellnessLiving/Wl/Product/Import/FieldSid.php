<?php

namespace WellnessLiving\Wl\Product\Import;

/**
 * List of fields that user can upload to import products.
 *
 * Last used ID: 13
 */
abstract class FieldSid
{
  /**
   * Product barcode.
   */
  const BARCODE = 1;

  /**
   * Product color.
   */
  const COLOR = 2;

  /**
   * Cost of the product.
   */
  const COST = 3;

  /**
   * Description.
   */
  const DESCRIPTION = 6;

  /**
   * Location title.
   */
  const LOCATION = 4;

  /**
   * Manufacture ID.
   */
  const MANUFACTURE = 5;

  /**
   * Product title.
   */
  const PRODUCT_NAME = 7;

  /**
   * Re-order level.
   */
  const REORDER_LEVEL = 8;

  /**
   * Retail price.
   */
  const RETAIL_PRICE = 9;

  /**
   * Product size.
   */
  const SIZE = 10;

  /**
   * Sku code.
   */
  const SKU = 13;

  /**
   * Number of products in a stock.
   */
  const STOCK = 11;

  /**
   * Product supplier.
   */
  const SUPPLIER = 12;
}

?>