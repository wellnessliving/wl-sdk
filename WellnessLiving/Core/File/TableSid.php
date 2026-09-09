<?php

namespace WellnessLiving\Core\File;

/**
 * List of different file formats which can be treated as table.
 *
 * Last used ID: 5.
 */
class TableSid
{
  /**
   * *.csv files.
   */
  const CSV = 1;

  /**
   * *.pdf files.
   */
  const PDF = 5;

  /**
   * Txt file with certain delimiter.
   */
  const TXT = 4;

  /**
   * Excel format before 2007 year.
   */
  const XLS = 2;

  /**
   * Excel format after 2007 year.
   */
  const XLSX = 3;
}

?>