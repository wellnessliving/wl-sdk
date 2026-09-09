<?php

namespace WellnessLiving\Core\Db;

/**
 * Lists types of database keys.
 */
class DbKeySid
{
  /**
   * Format of the key is an arbitrary string (format is not checked); empty string and `null` are excluded.
   */
  const ARBITRARY = 1;

  /**
   * Format of the key is arbitrary (format is not checked) or `null`.
   */
  const ARBITRARY_NULL = 5;

  /**
   * Format of the key is a bigint unsigned.
   */
  const BIGINT = 3;

  /**
   * Format of the key is a bigint unsigned or `null`.
   */
  const BIGINT_NULL = 4;

  /**
   * Format of the key is a binary string.
   */
  const BINARY = 2;

  /**
   * Format of the key is a binary string or `null`.
   */
  const BINARY_NULL = 6;
}

?>