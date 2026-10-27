<?php

namespace WellnessLiving\Core\Testing\Automation;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Automation test API endpoint that flushes all application caches.
 *
 * On a stand this goes out of the stand: the memcache server is shared by all stands (they are isolated only by the
 * keys), so a call flushes the caches of every stand. Accepted for the tests on the stands.
 *
 * @method WlModelRequest get() Flushes all application caches.  Clears every cache layer used by the application via `CoreCache::flush_all()`. Intended for use by automation tests that need a clean cache state before or between test runs.
 */
class CacheFlushModel extends WlModelAbstract
{
  /**
 * Name of the action to perform within this endpoint.
 *
 * @get get
 * @var string
 */
  public $s_action = '';

  /**
 * Request authentication token.
 *
 * A hex-encoded `sha256` signature that proves the caller knows the shared secret.
 * See `checkAccess()` for the expected formula.
 *
 * The token comes from the URL for a request of the method `POST` as well: the body of such a request carries the
 *
 * @get get
 * @post get
 * @var string
 */
  public $s_token = '';
}

?>