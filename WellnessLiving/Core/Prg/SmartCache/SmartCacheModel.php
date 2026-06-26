<?php

namespace WellnessLiving\Core\Prg\SmartCache;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api for run smart cache.
 *
 * @method WlModelRequest get()
 */
class SmartCacheModel extends WlModelAbstract
{
  /**
   * @get result
   * @var bool
   */
  public $is_change_js;

  /**
   * @get result
   * @var bool
   */
  public $is_change_less;

  /**
   * @get result
   * @var bool
   */
  public $is_change_opcache;

  /**
   * <tt>true</tt> if use redirect, <tt>false</tt> otherwise.
   *
   * @get get
   * @var bool
   */
  public $is_redirect = false;
}

?>