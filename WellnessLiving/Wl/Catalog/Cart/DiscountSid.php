<?php

namespace WellnessLiving\Wl\Catalog\Cart;

/**
 * List of discount types that can be applied for shopping cart.
 */
class DiscountSid
{
  /**
   * Discount applies via specifying special discount code.
   */
  const DISCOUNT_CODE = 1;

  /**
   * Discount applies via specifying a fixed amount of money.
   */
  const MANUAL_FIX = 2;

  /**
   * Discount applies via specifying the percentage of the discount from the principal amount.
   */
  const MANUAL_PERCENT = 3;
}

?>