<?php

namespace WellnessLiving;

/**
 * Contains WellnessLiving SDK configuration.
 *
 * To use it, create a class that inherits this class, and override constants.
 */
abstract class WlConfigAbstract
{
  /**
   * URL of the server (including trailing slash).
   */
  const AGENT='WellnessLiving SDK/1.0 (WellnessLiving SDK)';

  /**
   * Secret code to authorize application.
   *
   * @var string
   */
  const AUTHORIZE_CODE=null;

  /**
   * Application ID.
   *
   * @var string
   */
  const AUTHORIZE_ID=null;

  /**
   * Name of a persistent cookie.
   */
  const COOKIE_PERSISTENT='sp';

  /**
   * Name of a transient cookie.
   */
  const COOKIE_TRANSIENT='st';

  /**
   * Timeout to wait for connection to establish.
   */
  const TIMEOUT_CONNECT=20;

  /**
   * Timeout to wait for data reading from an established connection.
   */
  const TIMEOUT_READ=60;

  /**
   * URL of the server (including trailing slash).
   */
  const URL='https://staging.wellnessliving.com/';

  /**
   * Asserts that configuration object is configured correctly.
   *
   * @throws WlAssertException In a case of an error with configuration settings.
   */
  public function assertValid()
  {
    WlAssertException::assertTrue(is_string($this::COOKIE_PERSISTENT)&&$this::COOKIE_PERSISTENT,[
      'text_message' => get_class($this).'::COOKIE_PERSISTENT is not set.'
    ]);
    WlAssertException::assertTrue(is_string($this::COOKIE_TRANSIENT)&&$this::COOKIE_TRANSIENT,[
      'text_message' => get_class($this).'::COOKIE_TRANSIENT is not set.'
    ]);
    WlAssertException::assertTrue(is_string($this::URL)&&$this::URL,[
      'text_message' => get_class($this).'::URL is not set.'
    ]);
  }
}