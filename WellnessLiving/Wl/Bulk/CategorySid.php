<?php

namespace WellnessLiving\Wl\Bulk;

/**
 * List of types for bulk operations.
 *
 * Last used id: 7.
 */
class CategorySid
{
  /**
   * Operations with clients and business members.
   */
  const CLIENT = 1;

  /**
   * Uncategorized operations.
   */
  const OTHER = 4;

  /**
   * Operations with pricing options.
   */
  const PROMOTION = 5;

  /**
   * Operations with sales, products and payments.
   */
  const SALE = 2;

  /**
   * Operations with classes, appointments, events.
   */
  const SERVICE = 3;

  /**
   * Client's subscription.
   */
  const SUBSCRIBE = 6;

  /**
   * Client's visit.
   */
  const VISIT = 7;
}

?>