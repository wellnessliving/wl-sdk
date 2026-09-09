<?php

namespace WellnessLiving\Wl\Franchise\Fee;

/**
 * List of apply fee types.
 *
 * Last used ID: 7
 */
class FeeApplySid
{
  /**
   * Apply fees on account balance refill operation.
   *
   * @title Account Balance
   */
  const ACCOUNT_BALANCE = 1;

  /**
   * Apply fee to discount.
   *
   * @title Discounts
   */
  const DISCOUNTS = 2;

  /**
   * Apply fee to non-integrated payment methods.
   *
   * @title Non-integrated payment methods
   */
  const NON_INTEGRATED = 7;

  /**
   * Apply fee to subtotal.
   *
   * @title Subtotal
   */
  const SUBTOTAL = 3;

  /**
   * Apply fee to surcharges.
   *
   * @title Surcharges
   */
  const SURCHARGES = 4;

  /**
   * Apply fee to taxes.
   *
   * @title Taxes
   */
  const TAXES = 5;

  /**
   * Apply fee to tips.
   *
   * @title Tips
   */
  const TIP = 6;
}

?>