<?php

namespace WellnessLiving\Core;

/**
 * Possible output formats from API servers.
 */
abstract class ARestFormatSid
{
  /**
   * JSON string.
   */
  const JSON = 1;

  /**
   * Name-value pairs (according to
   * {@link http://www.w3.org/TR/html401/interact/forms.html#h-17.13.4.1 application/x-www-form-urlencoded format}).
   * Example: <tt>option1=value1&option2=value+2</tt>. Converts to array.
   */
  const NVP = 3;

  /**
   * XML string. Converts to SimpleXMLElement object.
   */
  const XML = 2;
}

?>