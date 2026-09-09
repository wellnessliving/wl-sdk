<?php

namespace WellnessLiving\Wl\Purchase\Item\Search\SearchWord;

/**
 * Virtual purchase item tag list.
 *
 * @id-last 7
 */
class VirtualTagSid
{
  /**
   * 'Account payment' virtual revenue category.
   */
  const ACCOUNT_PAYMENT = 1;

  /**
   * Expenses from collections revenues.
   */
  const COLLECTIONS_EXPENSE = 4;

  /**
   * Revenues from collections.
   */
  const COLLECTIONS_REVENUE = 3;

  /**
   * 'Fees' virtual revenue category.
   */
  const FEE = 7;

  /**
   * 'Gift card' virtual revenue category.
   */
  const GIFT_CARD = 2;

  /**
   * 'Surcharge' virtual revenue category.
   */
  const SURCHARGE = 6;

  /**
   * 'Tips' virtual revenue category.
   */
  const TIP = 5;
}

?>