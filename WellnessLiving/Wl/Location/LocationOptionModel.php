<?php

namespace WellnessLiving\Wl\Location;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API to edit location options.
 *
 * @method WlModelRequest post() Updates location customer status, count of customers locations and adds log.
 */
class LocationOptionModel extends WlModelAbstract
{
  /**
   * Local date of operation.
   *
   * @post post
   * @var string
   */
  public $dl_start;

  /**
   * Whether location is fee.
   *
   * @post post
   * @var bool
   */
  public $is_customer;

  /**
   * Key of business.
   *
   * @post post
   * @var string
   */
  public $k_business;

  /**
   * Key of location.
   *
   * @post post
   * @var string
   */
  public $k_location;
}

?>