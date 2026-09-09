<?php

namespace WellnessLiving\Wl\Html\FormElement\SelectMultipleSearch;

/**
 * List of formats in which items сan be submitted from selected multiple search.
 *
 * Last ID: 3.
 */
class SubmitFormatSid
{
  /**
   * Selection submitted as JSON-encoded array of item keys.
   */
  const JSON = 2;

  /**
   * Automatic submission is not supported.
   * Client code should handle submission manually.
   */
  const NONE = 3;

  /**
   * Selection submitted as list of item keys.
   * In this case there is a changes to reach limit of post elements.
   */
  const PLAIN = 1;
}

?>