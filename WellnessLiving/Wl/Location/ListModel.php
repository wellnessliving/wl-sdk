<?php

namespace WellnessLiving\Wl\Location;

use WellnessLiving\WlModelAbstract;

/**
 * Returns information for all locations belonging to a business.
 */
class ListModel extends WlModelAbstract
{
  /**
   * A list of business keys.
   * You can specify this instead of {@link ListModel::$k_business} to load data for many businesses in one call.
   *
   * @get get
   * @var string[]
   */
  public $a_business = [];

  /**
   * Information about the business's location(s). If you've specified multiple businesses for this endpoint, this will
   * return location information for multiple businesses. Keys refer to location keys. Values refer to nested arrays with the next keys:
   *
   * @get result
   * @var array[]
   */
  public $a_location;

  /**
   * The business key used internally by WellnessLiving.
   *
   * In case when passed regular or franchisee business returns only locations for requested business.
   * In case when passed franchisor business returns locations for all franchisees of this franchisor.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The primary keys of the selected businesses.
   * You can specify this instead of {@link ListModel::$k_business} to load data for many businesses in one call.
   *
   * This is the same as <var>$a_business</var>, but serialized with JSON (to make the URL shorter).
   *
   * @get get
   * @var string
   */
  public $s_business = '';

  /**
   * Determines whether removed locations should be returned.
   *
   * @get get
   * @var bool
   */
  public $show_remove = false;
}

?>