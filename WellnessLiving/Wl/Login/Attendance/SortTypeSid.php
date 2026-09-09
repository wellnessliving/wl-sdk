<?php

namespace WellnessLiving\Wl\Login\Attendance;

/**
 * List of sort types on attendance list.
 *
 * Last used ID: 6.
 */
class SortTypeSid
{
  /**
   * Sort by first booked.
   */
  const BOOK_FIRST = 1;

  /**
   * Sort by last booked.
   */
  const BOOK_LAST = 2;

  /**
   * Sort by visit status - successfully attended first.
   */
  const CHECKED_IN = 5;

  /**
   * Sort by visit status - problematic first.
   */
  const CHECKED_IN_NOT = 6;

  /**
   * Sort by first name.
   */
  const NAME_FIRST = 3;

  /**
   * Sort by last name.
   */
  const NAME_LAST = 4;
}

?>