<?php

namespace WellnessLiving\Core\Geo\Region;

use WellnessLiving\Core\Locale\LocaleSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Gets a list of regions for a specified country or all countries.
 * A region refers to a jurisdiction like a state, province, or territory.
 *
 * @method WlModelRequest get() Retrieves information about countries and regions.  Populates country and region dropdowns in address forms. Returns one or all countries together with their subordinate regions (states, provinces, territories). Pass a locale to get only the country relevant to a given market, or set `$is_locale_all` to retrieve the full list for multi-country UIs.
 */
class RegionModel extends WlModelAbstract
{
  /**
   * A list of regions grouped by their country.
   *
   * <dl>
   *   <dt>string[] `a_region`</dt>
   *   <dd>
   *     A list of regions in the country. Every element has the next keys:
   *     <dl>
   *       <dt>string `k_geo`</dt>
   *       <dd>The region key.</dd>
   * 
   *       <dt>string `s_title`</dt>
   *       <dd>The name of the region.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int `id_locale`</dt>
   *   <dd>The locale ID of the country. One of the {@link LocaleSid} constants.</dd>
   * 
   *   <dt>string `k_geo_country`</dt>
   *   <dd>The country key.</dd>
   * 
   *   <dt>string `s_abbr`</dt>
   *   <dd>The country abbreviation.</dd>
   * 
   *   <dt>string `s_title`</dt>
   *   <dd>The name of the country.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_region;

  /**
   * The locale ID to find regions for. One of the {@link LocaleSid} constants.
   *
   * @get get
   * @var int
   */
  public $id_locale = 0;

  /**
   * Determines whether to get regions for all locales.
   *
   * If `true`, this will get regions for all locales. Otherwise, this will be `false`.
   *
   * @get get
   * @var bool
   */
  public $is_locale_all = false;
}

?>