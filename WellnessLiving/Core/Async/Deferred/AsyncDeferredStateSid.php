<?php

namespace WellnessLiving\Core\Async\Deferred;

/**
 * Represents a list of states of deferred objects / promises.
 */
abstract class AsyncDeferredStateSid
{
  /**
   * This deferred object is detached from its asynchronous process.
   *
   * Such deferred object can not be used for anything: no callbacks can be added, it can not wait for resolved or
   * rejected state. In short, deferred object in this state can not be used at all.
   */
  const DETACHED = 1;

  /**
   * This deferred object is in pending state.
   *
   * This means that asynchronous process is being executed now.
   *
   * In this state, asynchronous process may call {@link \Core\Async\Deferred\AsyncDeferred::notify()} to send progress
   * notifications to the main process.
   */
  const PENDING = 2;

  /**
   * This deferred object is rejected.
   */
  const REJECTED = 3;

  /**
   * This deferred object is resolved.
   */
  const RESOLVED = 4;
}

?>