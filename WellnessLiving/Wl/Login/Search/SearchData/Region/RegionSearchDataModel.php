<?php

namespace WellnessLiving\Wl\Login\Search\SearchData\Region;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Search entity API.
 *
 * @method WlModelRequest get() Returns list of countries and regions.
 */
class RegionSearchDataModel extends WlModelAbstract
{
  /**
   * List of countries and nested regions.
   *
   * <dl>
   *   <dt>string[] `a_region`</dt>
   *   <dd>
   *     List of regions within the country.
   *     <dl>
   *       <dt>string `k_geo`</dt>
   *       <dd>Region key.</dd>
   * 
   *       <dt>string `text_title`</dt>
   *       <dd>Region name.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `k_geo`</dt>
   *   <dd>Country key.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Country name.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_geo;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business;
}

?>