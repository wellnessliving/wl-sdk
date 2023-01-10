<?php

namespace WellnessLiving\Wl\Location;

use WellnessLiving\WlModelAbstract;

/**
 * Point to get location lists for a bulk of business.
 *
 * Can be used to get all locations from all businesses, but should be used accurately because
 * list of all locations in the system can be pretty big.
 */
class ListBulkModel extends WlModelAbstract
{
  /**
   * Short information about locations.
   *
   * Keys - location primary keys; values - sub arrays with keys:
   * <dl>
   *   <dt>
   *     float <var>f_latitude</var>
   *   </dt>
   *   <dd>
   *     Coordinate latitude.
   *   </dd>
   *   <dt>
   *     float <var>f_longitude</var>
   *   </dt>
   *   <dd>
   *     Coordinate longitude.
   *   </dd>
   *   <dt>
   *     float <var>f_rate</var>
   *   </dt>
   *   <dd>
   *     Location rate.
   *   </dd>
   *   <dt>
   *     int <var>i_order</var>
   *   </dt>
   *   <dd>
   *     Order number.
   *   </dd>
   *   <dt>
   *     string <var>k_business</var>
   *   </dt>
   *   <dd>
   *     Business primary key.
   *   </dd>
   *   <dt>
   *     string <var>k_location</var>
   *   </dt>
   *   <dd>
   *     Location primary key.
   *   </dd>
   *   <dt>
   *     string <var>s_title</var>
   *   </dt>
   *   <dd>
   *     Location title.
   *   </dd>
   *   <dt>
   *     string <var>text_address</var>
   *   </dt>
   *   <dd>
   *     Full location address.
   *   </dd>
   *   <dt>
   *     string [<var>url_logo</var>]
   *   </dt>
   *   <dd>
   *     Location logo.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_location = [];

  /**
   * List of models with full information about each location.
   *
   * Every element is an object of the {@link \WellnessLiving\Wl\Location\View\ViewModel}.
   *
   * @get result
   * @var array[]
   */
  public $a_location_full = [];

  /**
   * ID of the directory if locations should be filtered by directory integration turned on.
   *
   * `0` if directory filter is not required.
   *
   * @get get
   * @see \WellnessLiving\WlProjectSid
   * @var int
   */
  public $id_directory = 0;

  /**
   * Bulk of businesses. Business primary keys serialized with JSON.
   *
   * Empty string if you need all locations in the system.
   *
   * @get get
   * @var string
   */
  public $s_business = '';

  /**
   * Bulk of locations. Location primary keys serialized with JSON.
   *
   * @get get
   * @var string
   */
  public $s_location = '';
}

?>