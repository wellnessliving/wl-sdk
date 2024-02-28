<?php

namespace WellnessLiving\Wl\Video\Catalog\Filter\Sort;

/**
 * List of video catalog sorting types.
 *
 * Any selected type should be sorted in descending order.
 */
class FilterSortSid
{
  /**
   * Sort alphabetically.
   *
   * @title Alphabetical
   */
  const ALPHABET = 1;

  /**
   * Sort by most recently added.
   *
   * @title Most Recent
   */
  const RECENT = 2;

  /**
   * Sorted by number of views.
   *
   * @title Views
   */
  const VIEW = 3;
}

?>