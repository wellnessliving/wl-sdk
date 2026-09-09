<?php

namespace WellnessLiving\Core\Cache\CachePhp;

/**
 * Result of the check if specified key exists or not.
 */
class CachePhpExistsResultSid
{
  /**
   * It is likely that the key does not exist, but there are chances that the key was newly inserted after the cache was
   * generated.
   *
   * This result actually means that cache does not know if this key exists or not.
   * This result is also returned when cache was not initialized.
   */
  const NO_LIKELY = 1;

  /**
   * Key does not exist, and there are no chances that this key could be newly inserted.
   */
  const NO_SURE = 2;

  /**
   * It is likely that the key exists, but there are chances that the key could be deleted after the cache was updated
   * last time.
   */
  const YES_LIKELY = 3;
}

?>