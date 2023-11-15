<?php

namespace WellnessLiving\Wl;

/**
 * A list of ways of how a Purchase Option price can be specified.
 */
class RsPromotionPriceSid
{
  /**
   * Price of a promotion is specified per period.
   */
  public const PERIOD = 1;

  /**
   * Price of a promotion is specified per session.
   */
  public const SESSION = 3;
}