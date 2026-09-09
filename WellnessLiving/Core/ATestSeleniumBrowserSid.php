<?php

namespace WellnessLiving\Core;

/**
 * A list of browsers available for Selenium tests.
 */
abstract class ATestSeleniumBrowserSid
{
  /**
   * Android.
   */
  const ANDROID = 1;

  /**
   * Google Chrome.
   */
  const CHROME = 2;

  /**
   * Firefox.
   */
  const FIREFOX = 3;

  /**
   * HTML Unit.
   */
  const HTMLUNIT = 4;

  /**
   * HTML Unit JS.
   */
  const HTMLUNIT_JS = 5;

  /**
   * Internet explorer.
   */
  const IE = 6;

  /**
   * iPad.
   */
  const IPAD = 7;

  /**
   * iPhone.
   */
  const IPHONE = 8;

  /**
   * Opera.
   */
  const OPERA = 9;

  /**
   * PhantomJS.
   */
  const PHANTOMJS = 10;

  /**
   * Safari.
   */
  const SAFARI = 11;
}

?>