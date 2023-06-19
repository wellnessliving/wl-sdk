<?php

namespace WellnessLiving\Wl\Location;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that gets all locations for a list of businesses.
 *
 * This can be used to get all locations from all businesses. When using this endpoint, note that it will return
 * a list of all locations in the system, potentially using substantial system resources. Using this endpoint can
 * potentially result in larger API calls than average calls made for other endpoints.
 */
class ListBulkModel extends WlModelAbstract
{
  /**
   * Short-form information about locations.
   *
   * Keys refer to location primary keys. Values refer to sub-arrays with the next keys:
   * <dl>
   *   <dt>
   *     float <var>f_latitude</var>
   *   </dt>
   *   <dd>
   *     The latitude coordinate.
   *   </dd>
   *   <dt>
   *     float <var>f_longitude</var>
   *   </dt>
   *   <dd>
   *     The longitude coordinate.
   *   </dd>
   *   <dt>
   *     float <var>f_rate</var>
   *   </dt>
   *   <dd>
   *     The location rate.
   *   </dd>
   *   <dt>
   *     int <var>i_order</var>
   *   </dt>
   *   <dd>
   *     The order number.
   *   </dd>
   *   <dt>
   *     string <var>k_business</var>
   *   </dt>
   *   <dd>
   *     The business's primary key.
   *   </dd>
   *   <dt>
   *     string <var>k_location</var>
   *   </dt>
   *   <dd>
   *     The location's primary key.
   *   </dd>
   *   <dt>
   *     string <var>s_title</var>
   *   </dt>
   *   <dd>
   *     The location title.
   *   </dd>
   *   <dt>
   *     string <var>text_address</var>
   *   </dt>
   *   <dd>
   *     The full location address.
   *   </dd>
   *   <dt>
   *     string [<var>url_logo</var>]
   *   </dt>
   *   <dd>
   *     The location logo.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_location;

  /**
   * A list of models with full information about each location.
   *
   * Every element is an object of the {@link \Wellnessliving\Wl\Location\View\ViewModel}.
   *
   * @get result
   * @var array[]
   */
  public $a_location_full = [];

  /**
   * The ID of the directory if locations should be filtered by enabling directory integration.
   *
   * `0` if a directory filter isn't required.
   *
   * @get get
   * @see \WellnessLiving\WlProjectSid
   * @var int
   */
  public $id_directory = 0;

  /**
   * A list of businesses. Business primary keys are serialized with JSON.
   *
   * Empty string if you need all locations in the system.
   *
   * @get get
   * @var string
   */
  public $s_business = '';

  /**
   * A list of locations. Location primary keys are serialized with JSON.
   *
   * @get get
   * @var string
   */
  public $s_location = '';
}

?>