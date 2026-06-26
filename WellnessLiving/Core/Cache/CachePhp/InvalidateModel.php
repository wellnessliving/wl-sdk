<?php

namespace WellnessLiving\Core\Cache\CachePhp;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Invalidates contents of a PHP file.
 *
 * @method WlModelRequest get()
 */
class InvalidateModel extends WlModelAbstract
{
  /**
   * CID of a PHP cache file to invalidate.
   *
   * @get get
   * @var int
   */
  public $cid_class = null;

  /**
   * Protection hash.
   *
   * @get get
   * @var string
   */
  public $s_hash = null;
}

?>