<?php

namespace WellnessLiving\Wl\Location;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that creates a new location in the business or edits a specified location.
 * Access to this endpoint is logged with specified permissions. It can also be accessed by guests during the
 * registration process for new businesses (see {@link \WellnessLiving\Wl\Business\BusinessModel}).
 */
class LocationModel extends WlModelAbstract
{
  /**
   * The key of the business.
   * This field is required.
   *
   * @post post
   * @var string
   */
  public $k_business;

  /**
   * The key of the city.
   * This field is required for creating a new location.
   *
   * @post post
   * @var string|null
   */
  public $k_city;

  /**
   * The key of the location.
   * This will be `null` if it's being used to create a new location.
   *
   * @post post,result
   * @var string|null
   */
  public $k_location;

  /**
   * The key of the time zone.
   * This field is optional.
   *
   * @post post
   * @var string|null
   */
  public $k_timezone;

  /**
   * The address of the location.
   * This field is required for creating a new location.
   *
   * @post post
   * @var string|null
   */
  public $text_address;

  /**
   * The mail address.
   *
   * @post post
   * @var string|null
   */
  public $text_email;

  /**
   * The phone number.
   *
   * @post post
   * @var string|null
   */
  public $text_phone;

  /**
   * The postal code.
   *
   * @post post
   * @var string|null
   */
  public $text_postal;

  /**
   * The title of the location.
   * This field is required for creating a new location.
   *
   * @post post
   * @var string|null
   */
  public $text_title;
}

?>