<?php

namespace WellnessLiving\Core\Server\ApcClear;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Point to clear APC cache.
 *
 * @method WlModelRequest post() Deletes a key from APC cache.
 */
class ApcClearModel extends WlModelAbstract
{
  /**
   * A list of keys to delete from APC cache at all servers in the cluster.
   *
   * Note that values stored here are raw keys, i.e. they are copies of results of {@link \CmsCache::key()},
   *
   * @post post
   * @var string[]
   */
  public $a_key = [];

  /**
   * Type of the cache served by this API:
   *
   * * `apc` to delete from APC cache;
   * * `yac` to delete from YAC cache.
   *
   * @post post
   * @var string
   */
  public $s_cache = '';

  /**
   * @post post
   * @var string
   */
  public $s_hash = '';
}

?>