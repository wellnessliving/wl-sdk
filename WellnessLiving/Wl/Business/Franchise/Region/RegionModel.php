<?php

namespace WellnessLiving\Wl\Business\Franchise\Region;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Processes requests of the franchise region.
 *
 * @method WlModelRequest delete()
 * @method WlModelRequest post()
 */
class RegionModel extends WlModelAbstract
{
  /**
   * List of location.
   *
   * @post post
   * @var array
   */
  public $a_location;

  /**
   * Business key.
   *
   * @delete get
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * Franchise region key.
   * If <tt>null</tt> need create franchise region.
   *
   * @delete get
   * @post get,result
   * @var string|null
   */
  public $k_franchise_region;

  /**
   * Region description.
   *
   * @post post
   * @var string
   */
  public $text_description;

  /**
   * Region name.
   *
   * @post post
   * @var string
   */
  public $text_title = '';

  /**
   * User staff key.
   *
   * @post post
   * @var string
   */
  public $uid_staff = '';
}

?>