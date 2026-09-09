<?php

namespace WellnessLiving\Wl\Shop\Category;

/**
 * List of Setup -> Store configuration -> Categories and Layout sort options.
 */
class ShopCategorySortSid
{
  /**
   * Custom sort.
   */
  const CUSTOM = 2;

  /**
   * Sort by date.
   */
  const DATE = 3;

  /**
   * Sort by name/title.
   * Each entity can be sorted by name/title.
   */
  const NAME = 1;

  /**
   * Sort by price.
   */
  const PRICE = 4;
}

?>