<?php

/**
 * Types of taxes.
 */
abstract class WlTaxSid
{
  /**
   * Tax is accounted as fixed.
   * This type of tax should not be shown when you select the type of tax in business.
   */
  const FLAT = 1;

  /**
   * Tax is accounted based on percents.
   */
  const PERCENT = 2;

  /**
   * A tax for testing purposes.
   */
  const TEST = 3;
}

?>