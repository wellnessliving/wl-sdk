<?php

namespace WellnessLiving\Studio\Tv;

/**
 * TV page display priorities.
 *
 * Last used ID: 4.
 */
class TvPagePrioritySid
{
  /**
   * Priority for error pages.
   */
  const ERROR = 3;

  /**
   * If there is at least one high priority page, then only high priority pages are shown.
   */
  const HIGH = 1;

  /**
   * Default for all pages.
   */
  const NORMAL = 2;

  /**
   * Pages of this priority are not shown.
   */
  const OFF = 4;
}

?>