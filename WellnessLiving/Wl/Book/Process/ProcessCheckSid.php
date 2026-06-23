<?php

namespace WellnessLiving\Wl\Book\Process;

/**
 * List of checks that are performed before session book.
 *
 * Last used ID: 2.
 */
abstract class ProcessCheckSid
{
  /**
   * Check that a client has a credit card.
   */
  const CARD = 1;

  /**
   * Check a client has no unsigned waiver.
   */
  const WAIVER = 2;
}

?>