<?php

namespace WellnessLiving\Core;

/**
 * A class to work with length types.
 */
abstract class ALengthSid
{
  /**
   * Kilometer.
   */
  const KILOMETER = 2;

  /**
   * Metre.
   */
  const METRE = 3;

  /**
   * Mile.
   * 1609,344 metres.
   */
  const MILE = 1;

  /**
   * Yard.
   * 1 yard = 0.9144 metres.
   */
  const YARD = 4;
}

?>