<?php

namespace WellnessLiving\Wl\Member\Import\Map\Type;

/**
 * Type of mappings while the member imports.
 */
class MapTypeSid
{
  /**
   * Family relationships mapping.
   *
   * Operator config client that are relatives to another clients and chooses their relationship type.
   */
  const FAMILY = 1;

  /**
   * Products mapping.
   *
   * Operator selects what existing products can be used instead of old not existing products from the file.
   */
  const PRODUCT = 2;

  /**
   * Purchase options mapping.
   *
   * Operator selects what existing promotions can be used instead of old not existing promotions from the file.
   */
  const PROMOTION = 3;
}

?>