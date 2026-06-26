<?php

namespace WellnessLiving\Wl\Integration\Collection;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Checks or changes the status of collections.
 *
 * @method WlModelRequest post() Changes the status of the Collections.
 */
class CollectionActivateModel extends WlModelAbstract
{
  /**
   * Defines whether business in testing mode.
   *
   * `true` if business in testing mode, `false` otherwise.
   *
   * @post result
   * @var bool
   */
  public $is_test = false;

  /**
   * Key of the business.
   *
   * @post post
   * @var string
   */
  public $k_business = '0';

  /**
   * User key.
   *
   * @post post
   * @var string
   */
  public $uid = '0';
}

?>