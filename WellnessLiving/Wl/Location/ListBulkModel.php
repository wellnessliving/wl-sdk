<?php

namespace WellnessLiving\Wl\Location;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Location\View\ViewModel;
use WellnessLiving\Wl\WlProjectSid;

/**
 * Gets all locations for a list of businesses.
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
   *   <dt>float `f_latitude`</dt>
   *   <dd>
   *     The latitude coordinate.
   *   </dd>
   *
   *   <dt>float `f_longitude`</dt>
   *   <dd>
   *     The longitude coordinate.
   *   </dd>
   *
   *   <dt>float `f_rate`</dt>
   *   <dd>
   *     The location rate.
   *   </dd>
   *
   *   <dt>int `i_order`</dt>
   *   <dd>
   *     The order number.
   *   </dd>
   *
   *   <dt>string `k_business`</dt>
   *   <dd>
   *     The business's primary key.
   *   </dd>
   *
   *   <dt>string `k_location`</dt>
   *   <dd>
   *     The location's primary key.
   *   </dd>
   *
   *   <dt>string `s_title`</dt>
   *   <dd>
   *     The location title.
   *   </dd>
   *
   *   <dt>string `text_address`</dt>
   *   <dd>
   *     The full location address.
   *   </dd>
   *
   *   <dt>string [`url_logo`]</dt>
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
   * Every element is an object of the {@link ViewModel}.
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
   * @var int
   * @see WlProjectSid
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