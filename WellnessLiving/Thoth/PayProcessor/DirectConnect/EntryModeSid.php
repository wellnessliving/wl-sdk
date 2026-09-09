<?php

namespace WellnessLiving\Thoth\PayProcessor\DirectConnect;

/**
 * A list of entry modes.
 *
 * Corresponds to <tt>EntryModeType</tt> enumeration in Direct Connect documentation.
 */
class EntryModeSid
{
  /**
   * Card information was obtained by Integrated Circuit Card (chip read).
   */
  const ICC = 1;

  /**
   * Cards stripe was read by swiping it on a magnetic stripe reader.
   */
  const MAGNETIC_STRIPE = 2;

  /**
   * Merchant manually keyed card value.
   */
  const MANUAL = 3;

  /**
   * Card information was obtained by near field communication reader.
   */
  const PROXIMITY = 4;

  /**
   * Unable to determine how merchant obtained values from card.
   */
  const UNKNOWN = 5;
}

?>