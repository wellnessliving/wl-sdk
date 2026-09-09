<?php

namespace WellnessLiving\Wl\Product\Import;

/**
 * Possible errors while import products.
 *
 * Last used ID: 4
 */
class ErrorSid
{
  /**
   * Format of the file is unrecognized.
   */
  const FILE_FORMAT = 3;

  /**
   * File not selected.
   */
  const FILE_SELECT = 1;

  /**
   * File has not been uploaded.
   */
  const FILE_UPLOAD = 2;

  /**
   * Location does not exist.
   */
  const LOCATION_NX = 4;
}

?>