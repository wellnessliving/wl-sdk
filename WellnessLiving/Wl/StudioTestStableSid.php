<?php

namespace WellnessLiving\Wl;

/**
 * Test stability statuses.
 *
 * Values of constants are minimum number of consequent OK statuses to set that status to a test.
 *
 * Values assigned to the constants are a subject to change. You can not expect these values are not changed, so
 * you can not store id_test_stable in the database. This is actually should not be needed.
 *
 * Constants may have arbitrary names, but names of two constants are fixed: YES to denote maximum stability and NO to
 * denote minimum stability.
 */
class StudioTestStableSid
{
  /**
   * Completely unstable. Repaired very recently.
   */
  const NO = 1;

  /**
   * Very unstable.
   */
  const NO_A = 5;

  /**
   * Unstable.
   */
  const NO_B = 15;

  /**
   * Near stable.
   */
  const NO_C = 30;

  /**
   * Stable.
   */
  const YES = 50;
}

?>