<?php

namespace WellnessLiving\Wl\Import\Custom\PurchaseMember;

/**
 * List of columns required to import purchases members.
 *
 * Last used ID: 12.
 */
abstract class CustomPurchaseMemberSid
{
  /**
   * Account.
   */
  const ACCOUNT = 9;

  /**
   * Client name.
   */
  const CLIENT_NAME = 2;

  /**
   * Discount amount.
   */
  const DISCOUNT_AMOUNT = 10;

  /**
   * Discount percent.
   */
  const DISCOUNT_PERCENT = 6;

  /**
   * Item price.
   */
  const ITEM_PRICE = 4;

  /**
   * Item title.
   */
  const ITEM_TITLE = 3;

  /**
   * Quantity.
   */
  const QUANTITY = 5;

  /**
   * Sale date.
   */
  const SALE_DATE = 1;

  /**
   * The amount that the client actually paid.
   */
  const SUBTOTAL_PRICE = 11;

  /**
   * Tax.
   */
  const TAX = 7;

  /**
   * Total price.
   */
  const TOTAL_PRICE = 8;

  /**
   * Client's uid.
   */
  const UID = 12;
}

?>