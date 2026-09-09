<?php

namespace WellnessLiving\Wl\Import\Pay;

/**
 * A list of statuses of import process.
 */
class ImportStatusSid
{
  /**
   * Import is being performed now.
   */
  const ACTIVE = 2;

  /**
   * Import has completed.
   */
  const COMPLETE = 1;

  /**
   * New import data was uploaded, but import process has not been started.
   */
  const WAIT = 3;
}

?>