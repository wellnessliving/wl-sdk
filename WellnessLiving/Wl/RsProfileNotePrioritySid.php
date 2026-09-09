<?php

namespace WellnessLiving\Wl;

/**
 * Note priorities.
 */
abstract class RsProfileNotePrioritySid
{
  /**
   * The most important notes.
   *
   * For example, negative balance.
   */
  const ALERT = 1;

  /**
   * Flagged notes.
   */
  const FLAG = 2;

  /**
   * Simple notes.
   *
   * For example, a list of promotions.
   */
  const NOTE = 4;

  /**
   * Warnings.
   *
   * Some messages added manually by business owners.
   */
  const WARNING = 3;
}

?>