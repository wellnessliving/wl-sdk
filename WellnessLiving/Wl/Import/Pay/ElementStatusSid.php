<?php

namespace WellnessLiving\Wl\Import\Pay;

/**
 * A list of statuses of individual credit cards or ACH accounts.
 */
class ElementStatusSid
{
  /**
   * Element was not imported due to errors.
   */
  const ERROR = 2;

  /**
   * Import item (credit card or ACH account) exists already.
   */
  const EXISTS = 3;

  /**
   * Imported successfully.
   */
  const OK = 5;

  /**
   * New import data was uploaded, but import process has not been started.
   */
  const WAIT = 4;

  /**
   * A warning has occurred during import. Examples:
   * * Credit card is expired. Ignored.
   * * Duplicate card number. Ignored (previous one was imported only).
   */
  const WARNING = 6;
}

?>