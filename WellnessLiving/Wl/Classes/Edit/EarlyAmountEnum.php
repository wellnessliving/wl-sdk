<?php

namespace WellnessLiving\Wl\Classes\Edit;

/**
 * Meaning of the early bird amount.
 *
 * The event setup form offers a block or a non-block event the whole list, and a ticketed event
 * only the discounts - a ticketed event has no regular price to replace.
 */
class EarlyAmountEnum
{
  /**
   * The amount is a discount in the currency of the business.
   * The regular price of the event is reduced by this amount.
   *
   * @title Discount
   */
  const DISCOUNT = 2;

  /**
   * The amount is a discount in percent of the regular price of the event.
   *
   * @title Percentage discount
   */
  const PERCENT = 3;

  /**
   * The amount is the price that replaces the regular price of the event.
   *
   * Legacy behavior - this is the only way the early bird price was stored before the early
   * bird discount was introduced.
   *
   * @title Fixed price
   */
  const PRICE = 1;
}

?>