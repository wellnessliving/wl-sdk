<?php

namespace WellnessLiving\Core;

/**
 * A list of field decorators.
 */
abstract class AFormDecoratorSid
{
  /**
   * Make a string lowercase.
   */
  const LOWER = 2;

  /**
   * Normalize money value. Replace all commas with dots.
   */
  const MONEY = 3;

  /**
   * Allows to trim field values.
   */
  const TRIM = 1;
}

?>