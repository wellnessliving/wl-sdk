<?php

namespace WellnessLiving\Wl\Coupon;

/**
 * List of possible types of Gift Cards.
 */
class WlTypeSid
{
  /**
   * Amount Gift Card.
   * Only one card of this type can be created in one business.
   */
  const AMOUNT = 2;

  /**
   * Product Gift Card.
   * Many cards of this type can be created in one business.
   * Each card contains list of products.
   */
  const COMPONENT = 1;

  /**
   * Quick Gift Card.
   * Only one card of this type can be created in one business.
   */
  const QUICK = 3;
}

?>