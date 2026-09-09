<?php

namespace WellnessLiving\Wl;

/**
 * Categories of business items for which taxes can by applied automatically.
 */
abstract class RsBusinessTaxSid
{
  /**
   * Products.
   */
  const PRODUCT = 1;

  /**
   * Purchase options.
   */
  const PROMOTION = 2;

  /**
   * Services.
   */
  const VISIT = 3;
}

?>