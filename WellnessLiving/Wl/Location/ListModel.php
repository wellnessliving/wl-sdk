<?php

namespace WellnessLiving\Wl\Location;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that returns information for all locations belonging to a business.
 */
class ListModel extends WlModelAbstract
{
  /**
   * An array containing information about all locations.
   * Each array index corresponds to the internal location key.
   * Each array element is an array containing the following fields:
   * <ul>
   *   <li>String <b>f_latitude</b>The latitude coordinate of the location.</li>
   *   <li>String <b>f_longitude</b>The longitude coordinate of the location.</li>
   *   <li>String <b>i_order</b>The display order for the location.</li>
   *   <li>String <b>k_location</b>The location ID number.</li>
   *   <li>String <b>s_title</b>The location name.</li>
   *   <li>String <b>text_address</b>The street address of the location.</li>
   *   <li>String <b>url_logo</b>The URL for the location logo image.</li>
   *   <li>String <b>url_slide</b>The first image from the location photo slider.</li>
   * </ul>
   *
   * @get result
   * @var array
   */
  public $a_location = [];

  /**
   * The business ID number used internally by WellnessLiving.
   *
   * `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;
}

?>