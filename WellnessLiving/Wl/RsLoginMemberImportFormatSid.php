<?php

namespace WellnessLiving\Wl;

/**
 * List of files that user can upload to import clients.
 */
abstract class RsLoginMemberImportFormatSid
{
  /**
   * Files with a delimiter ','
   */
  const CSV = 1;

  /**
   * Files with a delimiter ';'
   */
  const EXCEL = 2;
}

?>