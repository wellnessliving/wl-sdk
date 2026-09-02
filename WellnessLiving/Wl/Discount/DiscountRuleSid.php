<?php

namespace WellnessLiving\Wl\Discount;

/**
 * Discount types.
 *
 * Last used ID: 6.
 */
class DiscountRuleSid
{
  /**
   * Discount for catalog cart.
   */
  const CART = 5;

  /**
   * Discount by discount code.
   */
  const CODE = 4;

  /**
   * Group of custom discounts applied individually to a purchase item.
   */
  const CUSTOM = 6;

  /**
   * Discount by login type.
   */
  const LOGIN_TYPE = 1;

  /**
   * Manual discount for element of purchase.
   */
  const MANUAL = 3;

  /**
   * Discount by reward prize.
   */
  const PRIZE = 2;
}

?>