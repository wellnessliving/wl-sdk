<?php

namespace WellnessLiving\Wl\Member\Progress\Field;

/**
 * Possible types of the progress fields values.
 *
 * Lase used id: 5.
 */
class TypeSid
{
  /**
   * Value is decimal.
   *
   * @title Decimal
   */
  const DECIMAL = 2;

  /**
   * Value is image.
   *
   * @title Image
   */
  const IMAGE = 5;

  /**
   * Value is percentage.
   *
   * @title Percentage
   */
  const PERCENTAGE = 3;

  /**
   * Value is string.
   *
   * @title Text
   */
  const STRING = 4;

  /**
   * Value is whole number.
   *
   * @title Whole Number
   */
  const WHOLE_NUMBER = 1;
}

?>