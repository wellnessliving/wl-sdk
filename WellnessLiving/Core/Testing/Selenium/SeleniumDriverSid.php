<?php

namespace WellnessLiving\Core\Testing\Selenium;

/**
 * A list of Selenium drivers.
 */
class SeleniumDriverSid
{
  /**
   * Selenium tests are executed in multiple configurations at Browser Stack.
   */
  const BROWSER_STACK = 2;

  /**
   * All Selenium tests are executed in a single Selenium configuration on the local browser.
   */
  const LOCAL = 1;

  /**
   * All Selenium tests are executed on the local machine, driven by <tt>Playwright</tt> through a local bridge
   * server instead of a real Selenium/`WebDriver` server.
   */
  const PLAYWRIGHT = 5;

  /**
   * All selenium tests are executed in multiple configurations at auto-scalable <tt>WebEmulator</tt> selenium cluster.
   *
   * Several servers can be allocated for each test build. The number of servers allocated depends
   * on the number of threads that are running tests in this test build. Different servers can have
   * different operating systems and different browser versions, which allows selenium tests
   * to be run in different configurations.
   */
  const WEB_EMULATOR = 4;

  /**
   * Selenium server for all wellness living servers.
   */
  const WL = 3;
}

?>