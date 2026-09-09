<?php

namespace WellnessLiving\Core\Testing;

/**
 * Represents a list of all testing log sources.
 */
class TestingLogSourceSid
{
  /**
   * These log entries are added when API events occur: an API request is sent or received.
   */
  const API = 1;

  /**
   * These log entries are added when a deferred object is created, rejected or resolved.
   */
  const DEFERRED = 2;

  /**
   * Database dump.
   */
  const DUMP = 8;

  /**
   * Raw HTML code.
   */
  const HTML = 7;

  /**
   * These log entries are added when PHP-JavaScript interaction events occur:
   * * A JavaScript method of a page object is invoked;
   * */
  const INVOKE = 4;

  /**
   * JavaScript debugging events.
   */
  const JS = 6;

  /**
   * These log entries are added when SPA-related events like the following occur:
   * * an SPA view is changed;
   * * an SPA view is destroyed;
   * * SPA container is initialized.
   */
  const SPA = 3;

  /**
   * Time profiler log data.
   */
  const TIME = 5;
}

?>