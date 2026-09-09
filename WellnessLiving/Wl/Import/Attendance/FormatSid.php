<?php

namespace WellnessLiving\Wl\Import\Attendance;

/**
 * List of files that user can upload to import attendance.
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