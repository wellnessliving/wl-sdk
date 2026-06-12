<?php

namespace WellnessLiving\Wl\Business\Config;

use WellnessLiving\WlModelAbstract;

/**
 * Manages business configurations for clients, bookings, payments, and related things.
 */
class BusinessConfigModel extends WlModelAbstract
{
  /**
   * All business policies connected to clients and bookings.
   *
   * @get result
   * @var array
   */
  public $a_business_policy;

  /**
   * A list of business penalties.
   *
   * @get result
   * @var array
   */
  public $a_penalty;

  /**
   * Whether client must select a location at checkout.
   *
   * @get result
   * @var bool
   */
  public $is_location_client_select = false;

  /**
   * Determines whether staff members should select a location at checkout.
   *
   * If `true`, staff members should select a location at checkout. Otherwise, this will be `false`.
   *
   * @get result
   * @var bool
   */
  public $is_location_select;

  /**
   * Determines whether the business has white label setting enabled in the admin settings.
   *
   * If `true`, admin settings are enabled. Otherwise, this will be `false`.
   *
   * @get result
   * @var bool
   */
  public $is_white_label = false;

  /**
   * The business key.
   *
   * @get get
   * @var string
   */
  public $k_business;
}

?>