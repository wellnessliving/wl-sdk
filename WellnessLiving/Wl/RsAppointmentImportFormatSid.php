<?php

namespace WellnessLiving\Wl;

/**
 * List of files that user can upload to import appointments.
 */
abstract class RsAppointmentImportFormatSid
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