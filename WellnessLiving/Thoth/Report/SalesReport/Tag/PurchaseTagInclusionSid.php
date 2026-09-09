<?php

namespace WellnessLiving\Thoth\Report\SalesReport\Tag;

/**
 * Selector for with revenue categories to show.
 */
class PurchaseTagInclusionSid
{
  /**
   * To show all purchase item revenue categories.
   *
   * @title All Associated Categories
   */
  const ALL = 1;

  /**
   * To show only the primary revenue category for purchase item.
   *
   * @title Primary Category Only
   */
  const PRIMARY = 2;
}

?>