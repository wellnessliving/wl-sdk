<?php

namespace WellnessLiving\Wl\Import;

/**
 * List of files that user can upload to import some items.
 */
abstract class FormatSid
{
  /**
   * Files with a delimiter ','.
   */
  const CSV = 1;

  /**
   * Files with a delimiter ';'.
   */
  const EXCEL = 2;
}

?>