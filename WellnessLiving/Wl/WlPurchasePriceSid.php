<?php

namespace WellnessLiving\Wl;

/**
 * A list of ways of how a Purchase Option price can be specified.
 */
abstract class WlPurchasePriceSid
{
  /**
   * Price of a promotion is specified per period.
   */
  const PERIOD = 1;

  /**
   * Price of a promotion is specified per session.
   */
  const SESSION = 3;
}

?>