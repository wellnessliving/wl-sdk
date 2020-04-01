<?php

namespace WellnessLiving\Wl\Business\User\Subscribe;

use WellnessLiving\WlModelAbstract;

/**
 * Manages user subscription on business
 */
class SubscribeModel extends WlModelAbstract
{
  /**
   * <tt>true</tt> if subscribe, <tt>false</tt> otherwise.
   *
   * <tt>null</tt> until loaded.
   *
   * @get result
   * @put put
   * @var bool|null
   */
  public $is_subscribe = null;

  /**
   * Business key.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @put get
   * @var string|null
   */
  public $k_business = null;

  /**
   * User key.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @put get
   * @var string|null
   */
  public $uid = null;

}