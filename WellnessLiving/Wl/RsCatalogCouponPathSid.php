<?php

namespace WellnessLiving\Wl;

/**
 * Steps to be passed by client to buy a gift card
 */
class RsCatalogCouponPathSid
{
  /**
   * Config gift cards to buy.
   */
  const CONFIG = 1;

  /**
   * Sign In or select buy as guess.
   */
  const LOGIN = 2;

  /**
   * Payment Form
   */
  const PAY = 3;
}

?>