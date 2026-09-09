<?php

namespace WellnessLiving\Wl\Lead\Report\Total;

/**
 * Booking & Conversion Summary Cards types.
 *
 * Last used ID: 4.
 */
class TotalSummaryCardSid
{
  /**
   * Quantity of booking by leads whose date (date of bookings) is within a report date range.
   */
  const BOOKING_MADE = 1;

  /**
   * Relation of leads added within a date range who made bookings (not within the date range, can be in the future)
   *     to quantity of added leads within a date range (in percents).
   */
  const BOOKING_RATE = 2;

  /**
   * Relation of attended bookings added by leads scheduled within the date range related to not attended (in percents).
   */
  const SHOW_RATE = 3;

  /**
   * Relation of leads bought a PO within the date range who attended their bookings, scheduled within the date range
   *    to such leads without bought PO (in percents).
   */
  const SIGNED_RATE = 4;
}

?>