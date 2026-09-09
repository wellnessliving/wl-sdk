<?php

namespace WellnessLiving\Wl\Business\Lead\Download;

/**
 * Report export formats.
 *
 * Last ID: 3.
 */
abstract class LeadDownloadFormatSid
{
  /**
   * Files with a delimiter.
   */
  const CSV = 1;

  /**
   * Excel files in `xlsx` format.
   */
  const EXCEL = 2;

  /**
   * Files in `pdf` format.
   */
  const PDF = 3;
}

?>