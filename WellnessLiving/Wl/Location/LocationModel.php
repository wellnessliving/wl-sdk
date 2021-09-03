<?php

namespace WellnessLiving\Wl\Location;

use WellnessLiving\WlModelAbstract;

/**
 * This API can create a new location in the business or edit specified location.
 * Access for this actions has logged user with specified permissions or guest during process of registration a new
 * business (see {@link \WellnessLiving\Wl\Business\BusinessModel}).
 */
class LocationModel extends WlModelAbstract
{
  /**
   * Key of the business.
   * Field is required.
   *
   * @post post
   * @var string
   */
  public $k_business;

  /**
   * Key of the city.
   * Field is required for creating a new location.
   *
   * @post post
   * @var string
   */
  public $k_city;

  /**
   * Key of the location.
   * <tt>null</tt> if need to create a new location.
   *
   * @post post,result
   * @var string
   */
  public $k_location;

  /**
   * Key of the timezone.
   * Field is optionally.
   *
   * @post post
   */
  public $k_timezone;

  /**
   * Address of the location.
   * Field is required for creating a new location.
   *
   * @post post
   * @var string
   */
  public $text_address;

  /**
   * Title of the location.
   * Field is required for creating a new location.
   *
   * @post post
   * @var string
   */
  public $text_title;
}

?>