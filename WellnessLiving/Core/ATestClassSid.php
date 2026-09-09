<?php

namespace WellnessLiving\Core;

/**
 * A list of classes of tests.
 *
 * Last used ID: 8
 */
abstract class ATestClassSid
{
  /**
   * Unit-tests placed under .core subdirectory in the project's directory.
   */
  const CORE = 5;

  /**
   * Jasmine test for testing JS-code.
   *
   * @link http://jasmine.github.io/
   */
  const JASMINE = 6;

  /**
   * Javascript test for testing JS-code.
   */
  const JAVASCRIPT = 7;

  /**
   * Automatic test for all <tt>*.less</tt> files.
   */
  const LESS = 8;

  /**
   * Automatic test for PHP source file.
   */
  const PHP = 2;

  /**
   * Selenium test.
   */
  const SELENIUM = 4;

  /**
   * Unit-test.
   */
  const UNIT = 1;

  /**
   * Automatic test for XML source file.
   */
  const XML = 3;
}

?>