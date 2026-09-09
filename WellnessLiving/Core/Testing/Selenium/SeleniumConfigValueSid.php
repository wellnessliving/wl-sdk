<?php

namespace WellnessLiving\Core\Testing\Selenium;

/**
 * Contains a list of types of values that may be used in Selenium capabilities.
 */
class SeleniumConfigValueSid
{
  /**
   * Any value is allowed.
   */
  const ANY = 1;

  /**
   * This capability is set automatically, and should not be mentioned in configuration file.
   */
  const AUTO = 2;

  /**
   * Only boolean values allowed.
   */
  const BOOLEAN = 3;

  /**
   * This capability is predefined, and should not be mentioned in configuration file.
   */
  const PREDEFINED = 4;

  /**
   * A list of test groups that should run with this set of capabilities.
   */
  const SYSTEM_GROUP = 5;
}

?>