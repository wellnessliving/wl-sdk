<?php

namespace WellnessLiving\Wl;

/**
 * Report export formats.
 *
 * Last ID: 5.
 */
abstract class RsReportFormatSid
{
  /**
   * Export to cvs file.
   */
  const CSV = 1;

  /**
   * Export to excel file.
   */
  const EXCEL = 2;

  /**
   * Export image in jpeg format.
   *
   * Used only in JS.
   */
  const JPEG = 4;

  /**
   * Export to pdf file.
   */
  const PDF = 5;

  /**
   * Export image in png format.
   *
   * Used only in JS.
   */
  const PNG = 3;
}

?>