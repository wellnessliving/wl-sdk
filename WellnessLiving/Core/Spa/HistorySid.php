<?php

namespace WellnessLiving\Core\Spa;

/**
 * Values of application views nesting levels.
 */
class HistorySid
{
  /**
   * Pages that opens from the first page.
   */
  const MAIN = 11;

  /**
   * Other pages.
   */
  const OTHER = 21;

  /**
   * First application page.
   */
  const START = 1;

  /**
   * First and last pages of any wizard process.
   */
  const WIZARD = 31;
}

?>